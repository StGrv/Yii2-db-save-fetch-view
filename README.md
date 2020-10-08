# Yii2-DB-save-fetch-view
Creating "categories" MVC with some random fields. The records get saved using a @backend CRUD and then we fetch them in the @frontend view.

1. We create the DB schema using migrations.
2. Then we create the model that interacts with the DB and apply the rules() method with proper validations/extensions and so on..
3. The controller comes after the model where we construct the "actionIndex && actionView" methods that render the pages containing the displayed categories and unique solo records. Not only that but we also apply the logic there.
4. At the end we create the "index.php && view.php" files.
