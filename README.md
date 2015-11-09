#CWS

Based on the [Objective Subject Boilerplate](https://github.com/ObjectiveSubject/wp-boilerplate).
Adapted from the “\_s” theme: http://underscores.me

##Defining Admin styles

Support for custom admin styles is provided in functions.php under "**Custom Admin Dashboard styles**", "**Custom Admin Color Scheme**", and "**Custom Admin Login**". Comment out or delete this code to disable support for custom styles in the admin area.

####Colors

Custom admin **colors** are defined within `admin/color-scheme/admin-colors.scss`. All color related overrides get compiled in this file. By editing the `admin/_variables.scss` file, it's easy to create new color palettes.

####Login page

A custom logo can be provided for the login page by simply replacing the `login-logo.png` file in the `images` directory. Further styles for this page should be defined within `admin/login/admin-login.scss`

####Dashboard

Dashboard custom styles should be defined within `admin/admin-dashboard.scss`.
