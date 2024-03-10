## Sarah's Notes

Please run the application as follows
- Up Laravel Sail (or environment of your choice)
- Migrate and seed the database: `sail artisan migrate:fresh --seed`
- If using Sail, application will be available at http://localhost:8000/tasks
- Use the form to create, complete and delete tasks. The view should be responsive.
- Tasks should disappear if completed or deleted and a flash message should appear at the top of the screen
- Run unit test by executing `sail test`

I did have some issues running Sail with PHP 8.2 and had to temporarily downgrade to 8.1 to update the dependency, hopefully it will run OK for anyone else but just letting you know.

![MLP application](https://github.com/sarahLHeanan/mlp-to-do-list-sarah/assets/19517992/9f8d31fd-94c9-4ae2-b959-81ec9099de5a)

   
