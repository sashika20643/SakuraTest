<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Async Command Execution</title>
</head>
<body>

<div id="output-container"></div>
<div id="done" style="display:none">
    <h3>All done..use php artisan serve to run the project...</h3>
<b>Credentials:</b>
Admin
<ul>
    <li>
        E-mail: admin1@bookkeeper.com
    </li>
    <li>
        Password:admin123
    </li>
</ul>
Normal User:
<ul>
      <li>
        E-mail: Nuwan1@gmail.com
    </li>
    <li>
        Password:Nuwan123
    </li>
</ul>

</div>
<script>

(async function () {
    async function runCommand(command, message) {
        const outputContainer = document.getElementById('output-container');
        const outputDiv = document.createElement('div');
        outputDiv.innerHTML = `<strong>${message}</strong><br><pre>Executing command...</pre><br>`;
        outputContainer.appendChild(outputDiv);

        try {
            const response = await fetch('execute.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ command, message }),
            });

            const data = await response.json();

            // Update the output with the actual command result
            outputDiv.innerHTML = `<strong>${message}</strong><br><pre>${data.output}</pre><br>`;
        } catch (error) {
            console.error('Error:', error);
        }
    }

    // Example commands (running sequentially)
    await runCommand('composer update', 'Updating composer....');
    await runCommand('npm install', 'Installing npm packages....');
    await runCommand('php artisan key:generate', 'Generating application key....');
    await runCommand('php artisan migrate --seed', 'Running database migrations and seeding....');

    // Display the "done" message after all commands are executed
    document.getElementById('done').style.display = 'block';
})();
</script>

</body>
</html>
