# Nohsonic Physiotherapy Clinic — Website

Live site: **npc.clinic**
Repo: `git@github.com:chovtech/nohsonic.git`

---

## What This Is

Public-facing website for Nohsonic Physiotherapy Clinic. Built on the **Carefirst HTML template** (by Awaiken Themes) and being progressively rebranded and customised to match the Nohsonic brand identity.

The website covers: homepage, about, services, team, blog, contact, appointments, FAQs, video gallery, and a 404 page.

---

## Project Structure

```
nohsonic/
├── app/
│   ├── website/              ← PUBLIC WEBSITE (this is what deploys to npc.clinic)
│   │   ├── index.html        ← Homepage
│   │   ├── about.html
│   │   ├── service.html
│   │   ├── service-single.html
│   │   ├── team.html
│   │   ├── team-single.html
│   │   ├── blog.html
│   │   ├── blog-single.html
│   │   ├── contact.html
│   │   ├── appointment.html
│   │   ├── faqs.html
│   │   ├── video-gallery.html
│   │   ├── 404.html
│   │   ├── css/
│   │   │   ├── custom.css    ← MAIN STYLESHEET — all brand customisation goes here
│   │   │   └── ...           ← vendor CSS (Bootstrap, Swiper, FontAwesome, etc.)
│   │   ├── js/
│   │   │   ├── function.js   ← MAIN JS — all custom behaviour goes here
│   │   │   └── ...           ← vendor JS (jQuery, GSAP, Swiper, etc.)
│   │   ├── images/           ← All website images and SVG icons
│   │   ├── webfonts/         ← Font Awesome webfonts
│   │   └── docs/             ← Website PRD, content guide, SEO guide, sitemap
│   ├── EMR/                  ← Electronic Medical Records app (separate product)
│   └── Shared/
│       └── Design-System/    ← colors.json, typography.json, spacing.json
├── branding/
│   ├── Brand-Guide.md        ← SOURCE OF TRUTH for brand identity
│   ├── Brand-Tokens.json     ← Design tokens (colors, typography, spacing, shadows)
│   ├── logos/                ← nohsonic_logo_png.png, nohsonic_logo_white.png,
│   │                            nohsonic_icon_png.png, icon_white.png
│   ├── Brand-Assets/         ← favicon.ico, og-image.png, email-signature.png
│   └── Colors/               ← color-palette.png
├── research dump/            ← Reference images and inspiration (not deployed)
├── .cpanel.yml               ← cPanel deployment config
├── .gitignore
└── README.md
```

---

## Brand Identity

Always refer to `branding/Brand-Guide.md` and `branding/Brand-Tokens.json` as the source of truth.

### Colors

| Role           | Hex       | Usage                              |
|----------------|-----------|------------------------------------|
| Primary Blue   | `#0F4C97` | Headers, nav, core UI              |
| Accent Blue    | `#2E86DE` | CTAs, buttons, highlights          |
| Light Blue     | `#7CB4E8` | Soft backgrounds, cards            |
| Background     | `#F7FAFF` | Page background                    |
| Text Primary   | `#1A1A1A` | Body text                          |
| Text Muted     | `#6B7A90` | Secondary/caption text             |
| White          | `#FFFFFF` | Surfaces                           |

### Typography

| Role     | Font          |
|----------|---------------|
| Headings | **Montserrat** |
| Body     | **Open Sans**  |

### Logo Files

| File                          | Use case                      |
|-------------------------------|-------------------------------|
| `nohsonic_logo_png.png`       | Light backgrounds (main logo) |
| `nohsonic_logo_white.png`     | Dark backgrounds / header     |
| `nohsonic_icon_png.png`       | Icon-only (square contexts)   |
| `icon_white.png`              | Icon-only on dark bg          |
| `Brand-Assets/favicon.ico`    | Browser tab favicon           |

---

## Tech Stack (Website)

| Layer       | Technology                                      |
|-------------|-------------------------------------------------|
| Framework   | Bootstrap 5                                     |
| JS          | jQuery 3.7, GSAP + ScrollTrigger, Swiper        |
| Animations  | WOW.js, Parallaxie, SplitText                   |
| Icons       | Font Awesome 6                                  |
| Forms       | validator.min.js                                |
| Video       | jQuery MB YTPlayer (YouTube embed)              |
| Lightbox    | Magnific Popup                                  |
| Cursor      | MagicCursor                                     |
| Fonts       | Google Fonts — Montserrat, Open Sans            |

---

## Deploy Workflow

```
Local edit → nos-deploy "message" → GitHub → cPanel API → npc.clinic live (~30s)
```

### How to deploy (from WSL terminal)

```bash
nos-deploy "describe what changed"
```

This single command:
1. `git add -A` — stages all changes
2. `git commit -m "message"` — commits
3. `git push` — pushes to `github.com/chovtech/nohsonic`
4. Calls cPanel UAPI → triggers pull + `.cpanel.yml` deployment on the server

### How `.cpanel.yml` works

```yaml
deployment:
  tasks:
    - export DEPLOYPATH=/home/chikysyd/npc.clinic/
    - /bin/cp -R app/website/. $DEPLOYPATH
```

Only the contents of `app/website/` are copied to the live web root. Branding assets, EMR code, and research files stay in the repo but are never publicly served.

### Server details

| Property          | Value                                |
|-------------------|--------------------------------------|
| Host              | Namecheap shared hosting             |
| cPanel user       | `chikysyd`                           |
| Web root          | `/home/chikysyd/npc.clinic/`         |
| Repo path         | `/home/chikysyd/repositories/nohsonic` |
| SSH               | `ssh -p 21098 chikysyd@199.188.200.47` |

### Manual deploy (if nos-deploy isn't available)

```bash
# 1. Push from any machine
cd /path/to/nohsonic
git push origin main

# 2. Trigger cPanel deployment via API
curl -s -H "Authorization: cpanel chikysyd:YOUR_API_TOKEN" \
  "https://199.188.200.47:2083/execute/VersionControlDeployment/create?repository_root=/home/chikysyd/repositories/nohsonic"
```

---

## Local Development

The site runs locally via **XAMPP**.

- Local path: `C:\xampp\htdocs\nohsonic\`
- Local URL: `http://localhost/nohsonic/app/website/`
- No build step — plain HTML/CSS/JS, edit and refresh

---

## Making Changes

### CSS / Brand changes
Edit `app/website/css/custom.css`. The CSS variables at the top of the file control the entire colour scheme:

```css
:root {
  --primary-color: ...;
  --secondary-color: ...;
  /* etc */
}
```

### Content changes
Edit the relevant `.html` file directly. All pages share the same header/footer structure — if you update the nav in one page, update it in all pages.

### Images
Drop new images into `app/website/images/`. Reference them in HTML/CSS relative to the page location.

---

## Key Contacts / Accounts

- **GitHub org:** chovtech
- **Live domain:** npc.clinic
- **Hosting:** Namecheap shared hosting
- **cPanel:** accessible via Namecheap dashboard → Hosting → Manage
