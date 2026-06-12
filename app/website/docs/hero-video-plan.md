# NOHSONIC Hero Video Plan

## Overview

- Duration: 45–60 seconds (loops seamlessly)
- Audio: None (muted autoplay)
- Format: MP4, 1920×1080, H.264
- Style: Warm, bright, professional — Nigerian faces, Abuja clinic setting
- Brand color visible in scenes: #0F4C97 (uniforms, walls, decor)

---

## Patient Archetypes

These are the people who should appear as patients in the video.

| Archetype | Condition | Visual Cue |
|---|---|---|
| The office worker | Neck/back pain from desk job — civil servant, banker, oil & gas | Shirt and tie or smart-casual, holding lower back |
| The elderly parent | Arthritis, hip or knee pain, brought in by a child | 60s–70s, moving slowly, adult child alongside |
| The young footballer | Ankle sprain, knee ligament — weekend league or academy player | Sportswear, strapping tape on leg |
| The new mother | Post-natal pelvic floor or back pain | Woman in her 30s, modest dress |
| The road accident survivor | Whiplash, shoulder or back injury from RTA | Arm sling or cautious guarded movement |
| The busy executive | Stress-driven tension headaches, shoulder tightness | Power suit or agbada, impatient but trusting |

---

## Storyboard — 8 Scenes (~5–7 seconds each)

**Scene 1 — Welcome (wide)**
Clinic reception/waiting area. Clean, bright, blue accents visible.
Nigerian female staff member at the front desk looks up and smiles toward camera.
Camera movement: slow pan left-to-right.

**Scene 2 — Assessment**
Doctor seated across from a patient, holding a clipboard or tablet, listening.
Patient is talking. Warm, attentive energy.
Camera movement: slight zoom-in.

**Scene 3 — Hands-on treatment (hero shot)**
Close-up: therapist's hands pressing on a patient's lower back or shoulder blade.
This is the key shot — craft and expertise on full display.
Camera movement: static or very slow push-in. Slow motion preferred.

**Scene 4 — Guided rehab**
Patient standing, doing an arm-raise or knee-bend exercise.
Therapist stands beside them, one hand guiding.
Patient looks focused and engaged.

**Scene 5 — Equipment in use**
TENS/ultrasound device or resistance band exercise.
Shows modern clinical tools, not just hands.
Camera movement: slow reveal of equipment then face.

**Scene 6 — Recovery moment (emotional payoff)**
Patient rotates shoulder or walks a few steps — and smiles.
Therapist gives a nod or thumbs up.
Camera movement: slow zoom out.

**Scene 7 — Consultation (close)**
Doctor explaining something to patient using a diagram or phone screen.
Doctor is the face of confidence and knowledge.

**Scene 8 — Team candid (closing)**
2–3 staff members in the clinic, natural and candid.
One writing notes, another talking to a patient.
Camera movement: slow pan. Fade to end.



---

## Recommended AI Tools

| Tool | Best for | Cost |
|---|---|---|
| Kling AI (kling.kuaishou.com) | Realistic human motion, best face consistency | Free tier / ~$10/mo |


Start with Kling AI — best for realistic Nigerian faces and human motion.

---

## Assembly Instructions

1. Generate each clip (aim for 5–7 seconds per scene)
2. Import all clips into CapCut (free) or DaVinci Resolve
3. Arrange in scene order (1 through 8)
4. Add smooth crossfade between clips (0.5 seconds)
5. Export as: MP4, 1920x1080, H.264, no audio

---

## Website Integration

Once the video file is ready, save it to:
```
app/website/images/hero-bg-video.mp4
```

Then update index.html hero section (and all other pages that use the hero video):

Replace:
```html
<source src="https://demo.awaikenthemes.com/assets/videos/carefirst-video.mp4" type="video/mp4">
```

With:
```html
<source src="images/hero-bg-video.mp4" type="video/mp4">
```
