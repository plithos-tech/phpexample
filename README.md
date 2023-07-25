# Plithos PHP Example Application

This is a simple PHP web application that demonstrates how to deploy an application on the Plithos PAAS engine. Plithos provides a web-based dashboard for deploying applications, and you can easily deploy this PHP example application using the provided repository URL.

## Deployment Steps

1. Clone this Repository:
   - Copy the repository URL: `https://github.com/plithos-tech/phpexample.git`

2. Access the Plithos Dashboard:
   - Open your web browser and go to the Plithos Dashboard (URL will be provided by Plithos).
   - Sign in or create a new account if you don't have one.

3. Create a New Application:
   - In the dashboard, find the option to create a new application.
   - Provide a name for your application.

4. Add Repository:
   - Select "Git" as the deployment method.
   - Paste the repository URL (for example) `https://github.com/plithos-tech/phpexample.git` into the appropriate field.

5. Configure Environment Variables:
   - In the dashboard, find the option to set environment variables.
   - Add any required environment variables for your application, if needed.

6. Define Ports:
   - In the dashboard, find the option to define ports.
   - Make sure to define port 80 as this is the default port for PHP web applications.

7. Deploy the Application:
   - Click on the "Submit" button to deploy your application.

8. Access the Application:
   - Once the deployment process is completed, you will be provided with a URL where your PHP application is running.

## Endpoints

The PHP application provides the following endpoints:

1. **Root Endpoint**: Returns a JSON response with "Hello" => "World".
   - URL: `/`

2. **Environment Variable Endpoint**: Returns a JSON response with the value of the "ENV_ENV" environment variable or "World" if it's not set.
   - URL: `/env.php`

3. **Items Endpoint**: Takes an item_id as a parameter and an optional query parameter "q". Returns a JSON response with the provided item_id and the value of "q".
   - URL: `/items.php?q=10&item_id=12`

## Notes

- This example PHP application doesn't require any specific setup, and it's intended for demonstration purposes only.

- You can further customize this application or build more complex PHP applications following the same deployment steps.

- Make sure to define any required environment variables and ports as per the application's requirements.

- For more information or support, please refer to the Plithos documentation and support resources.

Happy coding and enjoy deploying your PHP application on Plithos! 🚀