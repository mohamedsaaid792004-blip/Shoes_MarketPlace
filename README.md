# Shoes Shop — React frontend + Python (FastAPI) backend

This repository was migrated from a Laravel/PHP project into a React frontend and a small Python (FastAPI) backend.

Quick start (development):

1. Frontend

```bash
npm install
npm run dev
```

2. Backend (from project root)

```bash
python -m venv .venv
.venv\Scripts\activate    # Windows
pip install -r backend/requirements.txt
uvicorn backend.main:app --reload --port 8000
```

The Vite dev server proxies `/api` to `http://localhost:8000` by default. Deploy the frontend to Vercel and host the backend wherever you prefer (Railway, Render, etc.) or use Vercel Serverless Functions.

Files added:
- `resources/js/*` — React app entry files
- `backend/*` — FastAPI backend with `/api/shoes` sample endpoint

Files removed:
- Laravel/PHP entry files (`artisan`, `composer.json`, `routes/*`, `public/index.php`, `phpunit.xml`)

If you want me to fully remove the remaining Laravel directories (`app/`, `bootstrap/`, `config/`, `vendor/`, `storage/`, `database/`), confirm and I'll remove or archive them.
