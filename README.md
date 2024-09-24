# Project Documentation

## Overview

This project is a web application utilizing Blade templates and Blade components to create a cohesive and reusable UI. The application leverages Blade’s templating engine to streamline the development process and ensure consistency across pages. Blade components are employed to encapsulate commonly used UI elements, promoting code reusability and maintainability.

## Table of Contents

1. [Dashboard](#Dashboard)
2. [Latest](#Latest)
   - [Single Post](#Single-post)
3. [About](#About)
   - [Leadership](#Leadership)
4. [Contact](#Contact)
5. [Profile Management](#Profile-management)
   - [Your Profile](#Your-profile)
   - [Settings](#Settings)
   - [Sign Out](#Sign-out)
6. [Blade Components](#Blade-components)

## Pages

### 1. **Dashboard**

![dashboard](https://github.com/user-attachments/assets/a9f8c11b-8241-461f-9a6f-63c5efbec56c)

The Dashboard is the main landing page for users after logging in. It provides an overview of recent activities, key metrics, and shortcuts to various sections of the website. It is designed to give users a quick summary of important information and easy access to relevant features. (_On Progress_)


---

### 2. **Latest**

![Latest (2)](https://github.com/user-attachments/assets/20a17227-3428-4631-a811-cac9984a3a1a)

The Latest page showcases the most recent updates, news, and content relevant to the user. This page is regularly updated to ensure that users have access to the latest information and developments within the application. When users click "Read More," they will be directed to a single post that displays the full content. (_On Progress_)

**Subpages:**

- **Single Post**

  ![Single post (2)](https://github.com/user-attachments/assets/c2a8721a-8724-4d59-bed6-0a2f81ab1b61)

  The Single Post page provides a detailed view of a specific update, news item, or relevant content selected by the user. This page displays the complete content, including images or other media. Users can easily navigate back to the Latest page or explore other posts for additional information.

---

### 3. **About**

![about](https://github.com/user-attachments/assets/14608ade-9fe7-4d11-8a72-2548ccec23d7)

The About page provides information about the application, including its purpose, mission, and the team behind it. This page helps users understand the background and goals of the project. (_On Progress_)


**Subpages:**

- **Leadership**

  ![leadership](https://github.com/user-attachments/assets/d2b0f23b-a63e-4b13-8e06-cd71c6ea4b03)

  The Leadership page highlights key members of the leadership team. This page includes their names, positions, and photos, providing users with an overview of the individuals who guide the direction of the project. (_On Progress_)

---

### 4. **Contact**

![Screenshot (553)](https://github.com/user-attachments/assets/05ec19fd-fef0-40dd-a19d-56685bb6d4dc)

The Contact page allows users to get in touch with the organization or team behind the application. It includes contact information, such as email addresses, phone numbers, or a contact form, facilitating communication between users and the project team. (_On Progress_)

---

### Profile Management

**Your Profile**

![profile](https://github.com/user-attachments/assets/4d167f58-ccd8-45c8-8421-c8d61c026cf8)

The Your Profile page displays user-specific information and settings. Users can view and update their personal details, such as their name, email, and profile picture. (_On Progress_)


**Settings**

![setting](https://github.com/user-attachments/assets/7ae469c0-0217-4a1c-af50-38dc7fc62ede)

The Settings page provides users with options to customize their experience and adjust application preferences. This may include changing passwords, and other personalization options. (_On Progress_)


**Sign Out**

The Sign Out option allows users to securely log out of their account. This is typically found in a dropdown menu or as a prominent button to ensure users can exit their session safely. (_On Progress_)

---

## Blade Components

### `layout`

The `layout` component provides the basic HTML structure for the pages. It includes the navbar, header, and a main content area where the page content is inserted.

**File:** `resources/views/components/layout.blade.php`

**Usage:**
```blade
<x-layout>
    <!-- Page content goes here -->
</x-layout>
```

**Features:**
- Includes navbar (`<x-navbar>`)
- Includes header (`<x-header>`)
- Includes a main content area

---

### `header`

The `header` component displays the main heading for a page.

**File:** `resources/views/components/header.blade.php`

**Usage:**
```blade
<x-header>{{ $title }}</x-header>
```

**Attributes:**
- `{{ $slot }}`: The content to be displayed inside the header.

---

### `dropdown`

![dropdown](https://github.com/user-attachments/assets/fb598221-cbae-4a95-b41b-0e5b29835081)

The `dropdown` component creates a dropdown menu for both desktop and mobile views.

**File:** `resources/views/components/dropdown.blade.php`

**Usage:**
```blade
<x-dropdown title="Dropdown Menu">
    <!-- Dropdown menu items go here -->
    <a href="#">Item 1</a>
    <a href="#">Item 2</a>
</x-dropdown>
```

**Attributes:**
- `{{ $title }}`: The title displayed on the button.
- `{{ $slot }}`: The content of the dropdown menu.

---

### `banner`

![banner](https://github.com/user-attachments/assets/83b0195e-5a3c-46f0-8454-5133174ad6ba)

The `banner` component displays a banner with a title, message, and optional link.

**File:** `resources/views/components/banner.blade.php`

**Usage:**
```blade
<x-banner 
    title="Welcome to Marine Buddies!" 
    message="Join us and explore marine life." 
    link="/register">
</x-banner>
```

**Attributes:**
- `{{ $title }}`: The main title of the banner.
- `{{ $message }}`: The message displayed in the banner.
- `{{ $link }}`: The link to which the "Register now" button directs.

---

### `nav-link`

The `nav-link` component is used to create navigation links with an active state.

**File:** `resources/views/components/nav-link.blade.php`

**Usage:**
```blade
<x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
```

**Attributes:**
- `href`: The URL to link to.
- `:active`: Boolean to determine if the link is active.

---

### `navbar`

The `navbar` component is used for the site's main navigation bar, including links and user menu.

**File:** `resources/views/components/navbar.blade.php`

**Usage:**
```blade
<x-navbar></x-navbar>
```

**Features:**
- Displays site logo
- Provides links for navigation
- Includes user profile menu for logged-in users
- Responsive design for mobile view

---

### `team-member`

![team-member](https://github.com/user-attachments/assets/371bceaa-a3ba-4868-9cb6-92ad8effe16e)

The `team-member` component is used to display information about a team member.

**File:** `resources/views/components/team-member.blade.php`

**Usage:**
```blade
<x-team-member 
    name="John Doe" 
    position="Team Lead">
    image="path/to/image.jpg"
</x-team-member>
```

**Attributes:**
- `{{ $image }}`: URL of the team member's image.
- `{{ $name }}`: The name of the team member.
- `{{ $position }}`: The position of the team member.

---
