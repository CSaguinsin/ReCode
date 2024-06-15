# Project Description📜
Platform designed for developers. By providing a centralized hub to compile, store, and reuse code snippets. With ReCode, developers can focus on innovation rather than reinventing the wheel.

# Tech Stack 💻
<img align="left" width="60px" height="60px" style="padding-right:10px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" />
<img align="left" width="60px" height="60px" style="padding-right:10px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/alpinejs/alpinejs-original.svg" />
<img align="left" width="60px" height="60px" style="padding-right:10px;"  src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" />
<img align="left" width="60px" height="60px" style="padding-right:10px;"  src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/livewire/livewire-original.svg" />
<br />
<br />
<br />
When envisioning ReCode, I sought a technology stack that resonated with my principles of simplicity and efficiency. The TALL stack—Tailwind CSS, Alpine.js, Laravel, and Livewire—stood out as the perfect fit.
<br></br>
Tailwind CSS revolutionized my approach to UI design. Its utility-first framework empowered me to craft bespoke interfaces with ease, ensuring that every element on ReCode aligns with our unique aesthetic and functional vision.
<br></br>
Alpine.js emerged as the ideal solution for introducing interactivity within our platform. Its lightweight nature meant I could sprinkle rich, JavaScript-driven interactions without weighing down the user experience—a crucial factor for a platform that prioritizes speed and agility.

Laravel was a natural choice for the backbone of ReCode. Its expressive syntax and robust features not only accelerated development but also provided a stable foundation for our platform to scale. Laravel’s vibrant ecosystem and its commitment to elegant code made it an indispensable ally in bringing ReCode to life.

Livewire allowed me to blend server-side stability with front-end reactivity seamlessly. It simplified state management and made real-time updates a breeze, which is essential for a collaborative environment where developers share and manage code snippets in real-time.

Choosing the TALL stack was a deliberate decision to ensure that ReCode embodies the principles of developer-centric design. It’s a reflection of my commitment to building not just a platform but a community where innovation thrives without barriers.

# UI Design ✍🎨
When I'm designing a software first I visualize what would be the color palettes, fonts, typography and I'm also using the 8 point grid system for sizing, spacing, and laying out components relative to one another. This means that any padding, margin, button height, etc. is always a multiple of 8 pixels.
### Landing page design
![Landing Page](https://github.com/CSaguinsin/ReCode/assets/123741242/6216b6b7-cf1e-406e-8610-63fe5023635a)

### Login & Signup UI designs
![Login](https://github.com/CSaguinsin/ReCode/assets/123741242/936c0245-3ab1-4700-a51c-aa07db4df871)
![Register](https://github.com/CSaguinsin/ReCode/assets/123741242/ac27d945-b1bf-4033-9f0d-c9376bfd5fd3)

# Features 🎯
Account Creation: Start by setting up your own account on ReCode. This personal space is where you can store, manage, and track your code snippets securely and efficiently.

Create with Ease: Add new code snippets effortlessly. Our user-friendly interface is designed for quick compilation and storage, paving the way for future innovations.

Read and Retrieve: Easily access your personal repository of code snippets. Advanced search and filtering options allow you to swiftly navigate and review your work.

Update Instantly: Keep your code base up-to-date with our straightforward update features. Edit existing snippets on-the-fly to ensure your repository always contains your latest work.

Delete Safely: Remove outdated or unnecessary code with confidence. ReCode helps you maintain a tidy and effective workspace that aligns with your project’s progress.

With these features, ReCode stands as a robust platform that not only streamlines code management but also enhances the individual developer’s productivity and creativity.

# How to run the project ❓
1.) Clone the Repository:
   - Navigate to the directory where you want to clone the project.
 ```
git clone https://github.com/CSaguinsin/TodoApp.git
```
2.) Navigate to the Project Directory:
   - After cloning, move into the project directory
 ```
cd ReCode
```

3.) Install Composer Dependencies:
   - Run the following command to install PHP dependencies:
 ```
composer install
```

4.) Install NPM Dependencies:
   - Run these commands to install JavaScript dependencies and compile assets:
 ```
npm install
npm run dev
```

5.) Set Up Environment File:
   - Copy .env.example to .env
 ```
cp .env.example .env
```
   - Open .env and configure your environment variables, such as APP_URL, database credentials, etc.

6.) Generate Application Key:
   - Run this command to generate a new application key
 ```
php artisan key:generate
```

7.) Run Migrations:
   - Set up your database and run migrations:
 ```
php artisan migrate
```

8.) Run the application servers:
   - Use this two commands to start project
 ```
npm run dev
php artisan serve
```
  - This will start a development server at http://localhost:8000.
