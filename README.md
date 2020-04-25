# Contact SaaS

 - This is a simple software as a service application for users to maintain Contacts.
 - There is basic authentication for users to register/login.
 - Authenticated users can view, create/import, edit, or delete contacts.
 - Contacts will be synced with a remote repository. 
 - The included remote repository impliments [klaviyo](https://www.klaviyo.com/), however, the service is coded to an interface so another implimentation can be swaped in later or mocked for tests if needed.
 - The application uses [laravel horzion](https://laravel.com/docs/7.x/horizon) and dispached jobs/job queues so that remote repo http requests are handled in the background and application flow can be quickly returned to the user.
 - For local Development, the application database seeder will generate two users and contacts for them. You can login as email:user@mail.com | password:password, email:user2@mail.com | password:password, or just register your own test user.

## Documentation

 - [Local Development Instructions](/docs/local.md)
