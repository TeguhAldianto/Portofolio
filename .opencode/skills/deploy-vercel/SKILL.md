---
name: deploy-vercel
description: Deploy this Laravel portfolio to Vercel serverless
license: MIT
compatibility: opencode
metadata:
  platform: vercel
  type: deploy
---

## What I do

Guide deployment of this static Laravel portfolio to Vercel.

### Prerequisites
- Vercel CLI (`npm i -g vercel`) or Vercel dashboard
- Git repo pushed to GitHub

### Steps

1. **Build locally first**
   ```bash
   npm run build
   ```
   Verify `public/build/` has the Vite manifest.

2. **Set environment variables in Vercel dashboard**
   ```
   APP_ENV=production
   APP_DEBUG=false
   SESSION_DRIVER=cookie
   CACHE_STORE=array
   QUEUE_CONNECTION=sync
   ```

3. **Deploy**
   ```bash
   vercel --prod
   ```

4. **Verify**
   - Page loads without 500/404
   - Assets (CSS/JS/images) resolve correctly
   - Dark mode toggle works
   - All sections render (about, experience, skills, projects, contact)

### Rollback
If something breaks, run `vercel rollback` to revert to the previous deployment.

### Important notes
- `api/index.php` handles storage path redirect to `/tmp` — read-only workaround for Vercel serverless
- No database or auth on production
- Contact form will **not** work on Vercel (no server) — the POST route is local-only unless you add a serverless handler
