# HireMe Local Services Platform

This project is a local services platform developed with the Laravel framework, CSS, and JavaScript. The platform enables users to offer and discover various services such as plumbing, painting, gardening, and more. Providers can create, edit, and delete their services, while users can browse services, contact providers, and discuss details.

## Features

1. **Service Management for Providers:**
    - Providers can create, edit, and delete their services.
    - Each service includes a title, description, category, and an optional cost.

2. **Service Listing:**
    - Services are displayed sorted by category or publication date.

3. **User Interaction:**
    - Users can explore available services.
    - Users can contact service providers to discuss details.

4. **Authentication System with Roles:**
    - Implementation of a robust authentication system with roles.
    - Providers and users have distinct roles and permissions.

## Technologies Used

- **Laravel:** A powerful PHP framework for web application development.
- **CSS:** Styling language for designing an appealing and responsive user interface.
- **JavaScript:** Used for enhancing user interactions and functionalities.

## Setup Instructions

1. **Clone the Repository:**
    ```bash
    git clone https://github.com/zinebMachrouh/HireMe.git
    ```

2. **Install Dependencies:**
    ```bash
    composer install
    ```

3. **Setup Environment Variables:**
    - Duplicate the `.env.example` file and rename it to `.env`.
    - Configure your database connection, mail settings, and other environment variables.

4. **Run Migrations:**
    ```bash
    php artisan migrate
    ```

5. **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

6. **Serve the Application:**
    ```bash
    php artisan serve
    ```

7. **Access the Application:**
    Open your browser and navigate to `http://localhost:8000`.

## Bonus Features (Optional)

1. **Provider Service Management:**
    - Implement edit and delete functionalities for providers' services.

2. **Enhanced User Interaction:**
    - Implement a messaging system for users to communicate with providers within the platform.

3. **Additional Styling:**
    - Improve the user interface with additional styling and responsiveness.

## Contributors

- [Your Name](https://github.com/zinebMachrouh)
