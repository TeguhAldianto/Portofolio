---
name: ui-review
description: Review UI for "AI slop" — generic patterns that make the portfolio look like every other AI-generated site
license: MIT
compatibility: opencode
metadata:
  type: review
---

## What to hunt

You're looking for parts of the UI that feel like they were generated instead of
designed. The stuff that makes a portfolio blend in rather than stand out.

## Content red flags

"Transforming the future", "Innovation", "Leverage", "Synergy", "Next-gen",
"Cutting-edge" — these words mean nothing. If you see them, the fix is to
describe what actually happened. Real specifics beat vague flexes every time.

Subtitles that say "Get to know more" or "My professional journey" or "Technologies
I work with" — they're true and useless. Every portfolio says them. Replace with
something that has actual weight or kill the subtitle entirely.

English and Indonesian in the same component. Pick one per section. Mid-sentence
switches look like nobody proofread it.

## Visual red flags

**Stock photos.** People shaking hands, abstract blobs, office group shots,
"diverse team collaborating" — delete them. Use your own screenshots, your own
face, or nothing. Empty space is better than a photo that says nothing.

**Gradients.** This project uses emerald → teal (`--color-primary` →
`--color-accent`). If you see blue→purple, pink→orange, or any other gradient
combo, it doesn't belong. Stay in the palette.

**Card copy-paste.** Three cards in a row, each with an icon, a heading, and
two lines of text — that's a template, not a layout. If every child of a grid
has the same structure, at least one of them should be different.

**Hover effects on everything.** AOS on every element, magnetic on every
button, scale on every card — it becomes noise. Remove the animation from
elements that don't need feedback. Robot-like staggered AOS chains (delay=100,
200, 300, 400) are the easiest tell.

**Dark mode shadows.** Shadows that look like light-mode shadows applied to
dark-mode elements. If the background is near-black, the shadow should be
subtle or invisible. zinc-950 with a zinc-800 shadow looks wrong.

## Typography red flags

More than two font weights in one section. The project uses Inter and Plus
Jakarta Sans — anything beyond those two families is probably wrong.

text-zinc-500 on a near-black background is hard to read. If the bg is
zinc-900/950, bump text to zinc-300.

tracking-wider on anything longer than 3 words. Wide letter-spacing is for
short labels, not sentences.

## Layout red flags

Every section centered: h2 centered, subtitle centered, content centered, CTA
centered. Readers need visual variety — alternate left-aligned sections to
give the page rhythm.

Spacing that doesn't match the rest of the project. Almost every section uses
`py-16 md:py-24` or `py-32`. If a new section has different padding, it'll
look like it was added by a different person.

## Code red flags

Raw HTML where a project utility exists. `glass-card`, `btn-primary`,
`gradient-text` are defined for a reason. If someone wrote inline classes
instead of using them, flag it.

Inline `<style>` tags in Blade. Belongs in `resources/css/app.css`.

Hex colors instead of `var(--color-primary)` / `var(--color-accent)`. Custom
properties exist so themes can swap without hunting down every file.

## How to report

List 3-5 findings, ordered by effort-to-impact ratio (easiest fix with biggest
visual improvement first). Don't rewrite anything without asking.
