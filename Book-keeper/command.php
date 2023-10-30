<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Async Command Execution</title>
</head>
<body>

<div id="output-container"></div>
<div id="done">
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
function runCommand(command, message) {
    const outputContainer = document.getElementById('output-container');
    const outputDiv = document.createElement('div');
    outputDiv.innerHTML = `<strong>${message}</strong><br><pre>Executing command...</pre><br>`;
    outputContainer.appendChild(outputDiv);

    fetch('execute.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ command, message }),
    })
    .then(response => response.json())
    .then(data => {
        // Update the output with the actual command result
        outputDiv.innerHTML = `<strong>${message}</strong><br><pre>${data.output}</pre><br>`;
    })
    .catch(error => console.error('Error:', error));
}

// Example commands
runCommand('composer update', 'Updating composer....');
runCommand('npm install', 'Installing npm packages....');
runCommand('php artisan key:generate', 'Generating application key....');
runCommand('php artisan migrate --seed', 'Running database migrations and seeding....');
</script>

</body>
</html>
