# LabActivity9-Genilla

## Barangay Bakuna Tracker

A vaccination tracking dashboard for Barangay Matina Crossing Health Center in Davao City, built using Laravel, Blade, Tailwind CSS, Vite, and SQLite.

## Personalized Data

- **Student:** Red Isaac Genilla
- **Dashboard Title:** Bakuna Tracker – Purok Genilla
- **Health Worker:** Red
- **Vaccines:** BCG, Pentavalent, OPV, MMR, Anti-Flu, and Hepatitis B
- **Vaccination Statuses:** Scheduled, Done, and Overdue

## Seeded Login Credentials

- **Email:** nurse.genilla@bakuna.test
- **Password:** bakuna2026

## How to Run

1. Clone the repository and open the project folder.
2. Install dependencies:

   ```bash
   composer install
   npm install
   ```

3. Copy `.env.example` to `.env` and configure:

   ```env
   DB_CONNECTION=sqlite
   ```

4. Create `database/database.sqlite` if it doesn't exist, then generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Set up the database:

   ```bash
   php artisan migrate:fresh --seed
   ```

6. Start the Vite development server:

   ```bash
   npm run dev
   ```

7. Open another terminal and start Laravel:

   ```bash
   php artisan serve
   ```

8. Visit `http://127.0.0.1:8000` and sign in using the seeded credentials.

