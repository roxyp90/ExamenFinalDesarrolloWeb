# TODO: Update Auth Views to Match Login Style

-   [x] Modify `resources/views/auth/register.blade.php` to use AdminLTE styling like login.blade.php:
    -   Change to extend 'layouts.app_authentication'.
    -   Use login-box, card card-outline card-primary structure.
    -   Apply input-group for form fields (name, email, password, confirm password).
    -   Include social auth links and navigation links (to login).
    -   Ensure validation errors are displayed properly.
-   [x] Check and update other auth views (e.g., forgot password, verify) to match the style if needed.
-   [x] Test the register page by accessing it in the browser to verify styling and functionality. (Server is running on http://127.0.0.1:8000)
