<?php
// Definir credenciales de la base de datos
$servername = "localhost";
$dbname = "logicNestProyect";
$dbusername = "INGJADE";
$dbpassword = "JADE2023.";

// Conexión con la base de datos
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// =========================================================================================== //
// ======================================== Register CRUD ==================================== //
// =========================================================================================== //

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action']) && $_POST['action'] == 'add') {
        // Añadir un nuevo registro a la tabla 'Register'
        $stmt = $conn->prepare("INSERT INTO Register (name, last_name, address, phone, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$_POST['name'], $_POST['last_name'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['username'], $_POST['password']]);
    } elseif (isset($_POST['action']) && $_POST['action'] == 'edit') {
        // Actualizar un registro existente en la tabla 'register'
        $stmt = $conn->prepare("UPDATE Register SET name=?, last_name=?, address=?, phone=?, email=?, username=?, password=? WHERE id_register=?");
        $stmt->execute([$_POST['name'], $_POST['last_name'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['id_register']]);
    } elseif (isset($_POST['action']) && $_POST['action'] == 'delete') {
        // Eliminar un registro de la tabla 'register'
        $stmt = $conn->prepare("DELETE FROM Register WHERE id_register=?");
        $stmt->execute([$_POST['id_register']]);
    }
}*/

// Leer los registros de la tabla 'Register'
/*$stmt_register = $conn->prepare("SELECT id_register, name, last_name, address, phone, email, username, password FROM Register");
$stmt_register->execute();
$result_register = $stmt_register->fetchAll();*/

// =========================================================================================== //
// =================================== Gaming Keyboards CRUD ================================= //
// =========================================================================================== //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['actionGamingKeyboard']) && $_POST['actionGamingKeyboard'] == 'add') {
        // Añadir un nuevo registro a la tabla 'gaming keyboards'
        $stmt_keyboard_add = $conn->prepare("INSERT INTO GamingKeyboards (name_keyboard, brand_keyboard, compatible_devices_keyboard, color_keyboard, connectivity_keyboard, price_keyboard) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt_keyboard_add->execute([$_POST['name_keyboard'], $_POST['brand_keyboard'], $_POST['compatible_devices_keyboard'], $_POST['color_keyboard'], $_POST['connectivity_keyboard'], $_POST['price_keyboard']]);
    } elseif (isset($_POST['actionGamingKeyboard']) && $_POST['actionGamingKeyboard'] == 'edit') {
        // Actualizar un registro existente en la tabla 'gaming keyboards'
        $stmt_keyboard_edit = $conn->prepare("UPDATE GamingKeyboards SET name_keyboard=?, brand_keyboard=?, compatible_devices_keyboard=?, color_keyboard=?, connectivity_keyboard=?, price_keyboard=? WHERE id_keyboard=?");
        $stmt_keyboard_edit->execute([$_POST['name_keyboard'], $_POST['brand_keyboard'], $_POST['compatible_devices_keyboard'], $_POST['color_keyboard'], $_POST['connectivity_keyboard'], $_POST['price_keyboard'], $_POST['id_keyboard']]);
    } elseif (isset($_POST['actionGamingKeyboard']) && $_POST['actionGamingKeyboard'] == 'delete') {
        // Eliminar un registro de la tabla 'gaming keyboards'
        $stmt_keyboard_delete = $conn->prepare("DELETE FROM GamingKeyboards WHERE id_keyboard=?");
        $stmt_keyboard_delete->execute([$_POST['id_keyboard']]);
    }
}

// Leer los registros de la tabla 'Gaming Keyboards'
$stmt_keyboard_read = $conn->prepare("SELECT id_keyboard, name_keyboard, brand_keyboard, compatible_devices_keyboard, color_keyboard, connectivity_keyboard, price_keyboard FROM GamingKeyboards");
$stmt_keyboard_read->execute();
$result_keyboard = $stmt_keyboard_read->fetchAll();


// =========================================================================================== //
// ======================================= Gaming Mouse CRUD ================================= //
// =========================================================================================== //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['actionGamingMouse']) && $_POST['actionGamingMouse'] == 'add') {
        // Añadir un nuevo registro a la tabla 'gaming Mouse'
        $stmt_mouse_add = $conn->prepare("INSERT INTO GamingMouses (name_mouse, brand_mouse, color_mouse, connectivity_mouse, price_mouse) VALUES (?, ?, ?, ?, ?)");
        $stmt_mouse_add->execute([$_POST['name_mouse'], $_POST['brand_mouse'], $_POST['color_mouse'], $_POST['connectivity_mouse'], $_POST['price_mouse']]);
    } elseif (isset($_POST['actionGamingMouse']) && $_POST['actionGamingMouse'] == 'edit') {
        // Actualizar un registro existente en la tabla 'gaming Mouse'
        $stmt_mouse_edit = $conn->prepare("UPDATE GamingMouses SET name_mouse=?, brand_mouse=?, color_mouse=?, connectivity_mouse=?, price_mouse=? WHERE id_mouse=?");
        $stmt_mouse_edit->execute([$_POST['name_mouse'], $_POST['brand_mouse'], $_POST['color_mouse'], $_POST['connectivity_mouse'], $_POST['price_mouse'], $_POST['id_mouse']]);
    } elseif (isset($_POST['actionGamingMouse']) && $_POST['actionGamingMouse'] == 'delete') {
        // Eliminar un registro de la tabla 'gaming Mouse'
        $stmt_mouse_delete = $conn->prepare("DELETE FROM GamingMouses WHERE id_mouse=?");
        $stmt_mouse_delete->execute([$_POST['id_mouse']]);
    }
}

// Leer los registros de la tabla 'Gaming Mouse'
$stmt_mouse_read = $conn->prepare("SELECT id_mouse, name_mouse, brand_mouse, color_mouse, connectivity_mouse, price_mouse FROM GamingMouses");
$stmt_mouse_read->execute();
$result_mouse = $stmt_mouse_read->fetchAll();

// =========================================================================================== //
// =================================== Gaming Microphones CRUD =============================== //
// =========================================================================================== //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['actionGamingMicrophones']) && $_POST['actionGamingMicrophones'] == 'add') {
        // Añadir un nuevo registro a la tabla 'Gaming Microphones'
        $stmt_microphones_add = $conn->prepare("INSERT INTO GamingMicrophones (name_microphone, brand_microphone, color_microphone, special_feature_microphone, price_microphone) VALUES (?, ?, ?, ?, ?)");
        $stmt_microphones_add->execute([$_POST['name_microphone'], $_POST['brand_microphone'], $_POST['color_microphone'], $_POST['special_feature_microphone'], $_POST['price_microphone']]);
    } elseif (isset($_POST['actionGamingMicrophones']) && $_POST['actionGamingMicrophones'] == 'edit') {
        // Actualizar un registro existente en la tabla 'Gaming Microphones'
        $stmt_microphones_edit = $conn->prepare("UPDATE GamingMicrophones SET name_microphone=?, brand_microphone=?, color_microphone=?, special_feature_microphone=?, price_microphone=? WHERE id_microphone=?");
        $stmt_microphones_edit->execute([$_POST['name_microphone'], $_POST['brand_microphone'], $_POST['color_microphone'], $_POST['special_feature_microphone'], $_POST['price_microphone'], $_POST['id_microphone']]);
    } elseif (isset($_POST['actionGamingMicrophones']) && $_POST['actionGamingMicrophones'] == 'delete') {
        // Eliminar un registro de la tabla 'Gaming Microphones'
        $stmt_microphones_delete = $conn->prepare("DELETE FROM GamingMicrophones WHERE id_microphone=?");
        $stmt_microphones_delete->execute([$_POST['id_microphone']]);
    }
}

// Leer los registros de la tabla 'Gaming Microphones'
$stmt_microphones_read = $conn->prepare("SELECT id_microphone, name_microphone, brand_microphone, color_microphone, special_feature_microphone, price_microphone FROM GamingMicrophones");
$stmt_microphones_read->execute();
$result_microphones = $stmt_microphones_read->fetchAll();

// =========================================================================================== //
// ===================================== Gaming Headsets CRUD ================================= //
// =========================================================================================== //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['actionGamingHeadsets']) && $_POST['actionGamingHeadsets'] == 'add') {
        // Añadir un nuevo registro a la tabla 'Gaming Consoles'
        $stmt_headset_add = $conn->prepare("INSERT INTO GamingHeadsets (name_headset, brand_headset, wireless_interface_headset, form_factor_headset, price_headset) VALUES (?, ?, ?, ?, ?)");
        $stmt_headset_add->execute([$_POST['name_headset'], $_POST['brand_headset'], $_POST['wireless_interface_headset'], $_POST['form_factor_headset'], $_POST['price_headset']]);
    } elseif (isset($_POST['actionGamingHeadsets']) && $_POST['actionGamingHeadsets'] == 'edit') {
        // Actualizar un registro existente en la tabla 'Gaming Consoles'
        $stmt_headset_edit = $conn->prepare("UPDATE GamingHeadsets SET name_headset=?, brand_headset=?, wireless_interface_headset=?, form_factor_headset=?, price_headset=? WHERE id_headset=?");
        $stmt_headset_edit->execute([$_POST['name_headset'], $_POST['brand_headset'], $_POST['wireless_interface_headset'], $_POST['form_factor_headset'], $_POST['price_headset'], $_POST['id_headset']]);
    } elseif (isset($_POST['actionGamingHeadsets']) && $_POST['actionGamingHeadsets'] == 'delete') {
        // Eliminar un registro de la tabla 'Gaming Consoles'
        $stmt_headset_delete = $conn->prepare("DELETE FROM GamingHeadsets WHERE id_headset=?");
        $stmt_headset_delete->execute([$_POST['id_headset']]);
    }
}

// Leer los registros de la tabla 'Gaming Consoles'
$stmt_headset_read = $conn->prepare("SELECT id_headset, name_headset, brand_headset, wireless_interface_headset, form_factor_headset, price_headset FROM GamingHeadsets");
$stmt_headset_read->execute();
$result_headset = $stmt_headset_read->fetchAll();

// =========================================================================================== //
// ================================= Play Station Controls CRUD ============================== //
// =========================================================================================== //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['actionGamingPlay']) && $_POST['actionGamingPlay'] == 'add') {
        // Añadir un nuevo registro a la tabla 'PlayStation Controls'
        $stmt_play_add = $conn->prepare("INSERT INTO PlayStationControls (name_play, brand_play, color_play, technology_connectivit_play, connectivity_play, price_play) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt_play_add->execute([$_POST['name_play'], $_POST['brand_play'], $_POST['color_play'], $_POST['technology_connectivit_play'], $_POST['connectivity_play'], $_POST['price_play']]);
    } elseif (isset($_POST['actionGamingPlay']) && $_POST['actionGamingPlay'] == 'edit') {
        // Actualizar un registro existente en la tabla 'PlayStation Controls'
        $stmt_play_edit = $conn->prepare("UPDATE PlayStationControls SET name_play=?, brand_play=?, color_play=?, technology_connectivit_play=?, connectivity_play=?, price_play=? WHERE id_play=?");
        $stmt_play_edit->execute([$_POST['name_play'], $_POST['brand_play'], $_POST['color_play'], $_POST['technology_connectivit_play'], $_POST['connectivity_play'], $_POST['price_play'], $_POST['id_play']]);
    } elseif (isset($_POST['actionGamingPlay']) && $_POST['actionGamingPlay'] == 'delete') {
        // Eliminar un registro de la tabla 'PlayStation Controls'
        $stmt_play_delete = $conn->prepare("DELETE FROM PlayStationControls WHERE id_play=?");
        $stmt_play_delete->execute([$_POST['id_play']]);
    }
}

// Leer los registros de la tabla 'PlayStation Controls'
$stmt_play_read = $conn->prepare("SELECT id_play, name_play, brand_play, color_play, technology_connectivit_play, connectivity_play, price_play FROM PlayStationControls");
$stmt_play_read->execute();
$result_play = $stmt_play_read->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Interface</title>
    <link rel="stylesheet" href="css/accessories.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
        /* Estilos para el botón activo */
        :root {
            --lightPurpleColor: #FFD600;
        }

        .active {
            background-color: var(--lightPurpleColor);
            border-radius: 50px;
            color: white;
        }

        /* Estilos para ocultar el contenido */
        .tabcontent {
            display: none;
        }

        /* Estilos para los botones */
        .tablinks {
            cursor: pointer;
            padding: 10px;
            border: none;
            outline: none;
        }

        /* Estilo inicial para el primer tab activo */
        #gamingKeyboards {
            display: block;
        }
    </style>

</head>

<body>
    <section class="father-container-register-admin">
        <article class="information-container-register-admin">
            <h2 class="title-admin">LogicNestSystems</h2>
            <ul class="li-container-register-admin">
                <li class="li-register-admin tablinks active" onclick="openCategory2(event, 'gamingKeyboards')"><i class="uil uil-keyboard-alt"></i>Gaming Keyboards</li>
                <li class="li-register-admin tablinks" onclick="openCategory2(event, 'gamingMouses')"><i class="uil uil-mouse-alt"></i>Gaming Mouses</li>
                <li class="li-register-admin tablinks" onclick="openCategory2(event, 'gamingMicrophones')"><i class="uil uil-microphone"></i>Microphones</li>
                <li class="li-register-admin tablinks" onclick="openCategory2(event, 'gamingHeadsets')"><i class="uil uil-headphones-alt"></i>Gaming HeadSets</li>
                <li class="li-register-admin tablinks" onclick="openCategory2(event, 'playStationControls')"><i class="uil uil-pause"></i>Play Control</li>
                <li class="li-register-admin tablinks" onclick="location.href='admin.php'"><i class="uil uil-left-arrow-to-left"></i>Return</li>
                <li class="li-register-admin tablinks" onclick="location.href='./Login/login.html'"><i class="uil uil-signout"></i>Log Out</li>
            </ul>

            <p class="description-container-register-admin">
                <span class="description-register-admin">2024 CopyRights Reserved</span>
                <span class="description-register-admin">Privacy - Terms & Conditions</span>
            </p>
        </article>

        <section class="crud-container">

            <?php
            /*
            <!-- Register CRUD -->
            <article class="information2-container-register-admin tabcontent" id="register">
                <!-- Formulario para añadir/editar -->
                <form class="form-information2-container-register-admin" method="post">
                    <input class="input-form-information2-registr-admin" type="hidden" name="id_register" value="">
                    <input class="input-form-information2-registr-admin" type="hidden" name="action" value="add">
                    <input class="input-form-information2-registr-admin" type="text" name="name" placeholder="Name" required>
                    <input class="input-form-information2-registr-admin" type="text" name="last_name" placeholder="LastName" required>
                    <input class="input-form-information2-registr-admin" type="text" name="address" placeholder="Address" required>
                    <input class="input-form-information2-registr-admin" type="text" name="phone" placeholder="Phone" required>
                    <input class="input-form-information2-registr-admin" type="email" name="email" placeholder="Email" required>
                    <input class="input-form-information2-registr-admin" type="text" name="username" placeholder="User" required>
                    <input class="input-form-information2-registr-admin" type="password" name="password" placeholder="Password" required>
                    <button class="btnSaveIt" type="submit">Guardar</button>
                    <button class="btnSaveIt" type="button" onclick="generatePDF()">Generar Reporte</button>
                </form>
                <!-- Tabla de datos -->
                <table class="table-columns-register-admin" border="1">
                    <thead>
                        <tr>
                            <th class="columns-table-register-admin">ID</th>
                            <th class="columns-table-register-admin">NAME</th>
                            <th class="columns-table-register-admin">LASTNAME</th>
                            <th class="columns-table-register-admin">ADDRESS</th>
                            <th class="columns-table-register-admin">PHONE</th>
                            <th class="columns-table-register-admin">EMAIL</th>
                            <th class="columns-table-register-admin">USER</th>
                            <th class="columns-table-register-admin">PASSWORD</th>
                            <th class="columns-table-register-admin">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_register as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id_register']) ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['last_name']) ?></td>
                            <td><?= htmlspecialchars($row['address']) ?></td>
                            <td><?= htmlspecialchars($row['phone']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['password']) ?></td>
                            <td class="container-btn-actions-admin">
                                <form class="form-crud-admin" method="post">
                                    <input type="hidden" name="id_register" value="<?= $row['id_register'] ?>">
                                    <input type="hidden" name="action" value="delete">
                                    <button class="delte-btn-admin" type="submit">Delete</button>
                                </form>
                                <button class="edit-btn-admin" onclick="editRecordRegister(
                                    '<?= $row['id_register'] ?>',
                                    '<?= $row['name'] ?>',
                                    '<?= $row['last_name'] ?>',
                                    '<?= $row['address'] ?>',
                                    '<?= $row['phone'] ?>',
                                    '<?= $row['email'] ?>',
                                    '<?= $row['username'] ?>',
                                    '<?= $row['password'] ?>'
                                )">Edit</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    function editRecordRegister(id_register, name, last_name, address, phone, email, username, password) {
                        document.querySelector('[name="id_register"]').value = id_register;
                        document.querySelector('[name="name"]').value = name;
                        document.querySelector('[name="last_name"]').value = last_name;
                        document.querySelector('[name="address"]').value = address;
                        document.querySelector('[name="phone"]').value = phone;
                        document.querySelector('[name="email"]').value = email;
                        document.querySelector('[name="username"]').value = username;
                        document.querySelector('[name="password"]').value = password;

                        document.querySelector('[name="action"]').value = 'edit';
                    }
                </script>
            </article>
            */
            ?>


            <!-- Gaming Keyboards CRUD -->
            <article class="information3-container-register-admin tabcontent" id="gamingKeyboards">
                <!-- Formulario para añadir/editar -->
                <form class="form-information2-container-register-admin" method="post">
                    <input class="input-form-information2-registr-admin" type="hidden" name="id_keyboard" value="">
                    <input class="input-form-information2-registr-admin" type="hidden" name="actionGamingKeyboard" value="add"> <!-- action_chair en lugar de action3 -->
                    <input class="input-form-information2-registr-admin" type="text" name="name_keyboard" placeholder="Name" required>
                    <input class="input-form-information2-registr-admin" type="text" name="brand_keyboard" placeholder="Brand" required>
                    <input class="input-form-information2-registr-admin" type="text" name="compatible_devices_keyboard" placeholder="Compatible Devices" required>
                    <input class="input-form-information2-registr-admin" type="text" name="color_keyboard" placeholder="Color" required>
                    <input class="input-form-information2-registr-admin" type="text" name="connectivity_keyboard" placeholder="Connectivity" required>
                    <input class="input-form-information2-registr-admin" type="text" name="price_keyboard" placeholder="Price" required>
                    <button class="btnSaveIt" type="submit">Guardar</button>
                    <button class="btnSaveIt" type="button" onclick="generatePDF7()">Generar Reporte</button>
                </form>

                <!-- Tabla de datos -->
                <table class="table-columns-gamingKeyboards-admin" border="1">
                    <thead>
                        <tr>
                            <!-- Encabezados de columnas -->
                            <th class="columns-table-register-admin">ID</th>
                            <th class="columns-table-register-admin">Name</th>
                            <th class="columns-table-register-admin">BRAND</th>
                            <th class="columns-table-register-admin">COMPATIBLE DEVICE</th>
                            <th class="columns-table-register-admin">COLOR</th>
                            <th class="columns-table-register-admin">CONNECTIVITY</th>
                            <th class="columns-table-register-admin">PRICE</th>
                            <th class="columns-table-register-admin">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_keyboard as $row) : ?>
                            <tr>
                                <td><?= htmlspecialchars($row['id_keyboard']) ?></td>
                                <td><?= htmlspecialchars($row['name_keyboard']) ?></td>
                                <td><?= htmlspecialchars($row['brand_keyboard']) ?></td>
                                <td><?= htmlspecialchars($row['compatible_devices_keyboard']) ?></td>
                                <td><?= htmlspecialchars($row['color_keyboard']) ?></td>
                                <td><?= htmlspecialchars($row['connectivity_keyboard']) ?></td>
                                <td><?= htmlspecialchars($row['price_keyboard']) ?></td>
                                <td class="container-btn-actions-admin">
                                    <form class="form-crud-admin" method="post">
                                        <input type="hidden" name="id_keyboard" value="<?= $row['id_keyboard'] ?>">
                                        <input type="hidden" name="actionGamingKeyboard" value="delete"> <!-- Utilizando action3 en lugar de action_chair -->
                                        <button class="delte-btn-admin" type="submit">Eliminar</button>
                                    </form>
                                    <!-- Botón para editar -->
                                    <button class="edit-btn-admin" onclick="editRecordKeyboard(
                                '<?= $row['id_keyboard'] ?>',
                                '<?= $row['name_keyboard'] ?>',
                                '<?= $row['brand_keyboard'] ?>',
                                '<?= $row['compatible_devices_keyboard'] ?>',
                                '<?= $row['color_keyboard'] ?>',
                                '<?= $row['connectivity_keyboard'] ?>',

                                '<?= $row['price_keyboard'] ?>'
                            )">Editar</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    function editRecordKeyboard(id_keyboard, name_keyboard, brand_keyboard, compatible_devices_keyboard, color_keyboard, connectivity_keyboard, price_keyboard) {
                        document.querySelector('[name="id_keyboard"]').value = id_keyboard;
                        document.querySelector('[name="name_keyboard"]').value = name_keyboard;
                        document.querySelector('[name="brand_keyboard"]').value = brand_keyboard;
                        document.querySelector('[name="compatible_devices_keyboard"]').value = compatible_devices_keyboard;
                        document.querySelector('[name="color_keyboard"]').value = color_keyboard;
                        document.querySelector('[name="connectivity_keyboard"]').value = connectivity_keyboard;
                        document.querySelector('[name="price_keyboard"]').value = price_keyboard;

                        document.querySelector('[name="actionGamingKeyboard"]').value = 'edit'; // action_chair en lugar de action
                    }
                </script>
            </article>

            <!-- Gaming gamingMouses CRUD -->
            <article class="information4-container-register-admin tabcontent" id="gamingMouses">
                <!-- Formulario para añadir/editar -->
                <form class="form-information2-container-register-admin" method="post">
                    <input class="input-form-information2-registr-admin" type="hidden" name="id_mouse" value="">
                    <input class="input-form-information2-registr-admin" type="hidden" name="actionGamingMouse" value="add"> <!-- action_chair en lugar de action3 -->
                    <input class="input-form-information2-registr-admin" type="text" name="name_mouse" placeholder="Name" required>
                    <input class="input-form-information2-registr-admin" type="text" name="brand_mouse" placeholder="Brand" required>
                    <input class="input-form-information2-registr-admin" type="text" name="color_mouse" placeholder="Color" required>
                    <input class="input-form-information2-registr-admin" type="text" name="connectivity_mouse" placeholder="Connectivity" required>
                    <input class="input-form-information2-registr-admin" type="text" name="price_mouse" placeholder="Price" required>
                    <button class="btnSaveIt" type="submit">Guardar</button>
                    <button class="btnSaveIt" type="button" onclick="generatePDF8()">Generar Reporte</button>
                </form>

                <!-- Tabla de datos -->
                <table class="table-columns-gamingMouses-admin" border="1">
                    <thead>
                        <tr>
                            <!-- Encabezados de columnas -->
                            <th class="columns-table-register-admin">ID</th>
                            <th class="columns-table-register-admin">NAME</th>
                            <th class="columns-table-register-admin">BRAND</th>
                            <th class="columns-table-register-admin">COLOR</th>
                            <th class="columns-table-register-admin">CONNECTIVITY</th>
                            <th class="columns-table-register-admin">PRICE</th>
                            <th class="columns-table-register-admin">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_mouse as $row) : ?>
                            <tr>
                                <td><?= htmlspecialchars($row['id_mouse']) ?></td>
                                <td><?= htmlspecialchars($row['name_mouse']) ?></td>
                                <td><?= htmlspecialchars($row['brand_mouse']) ?></td>
                                <td><?= htmlspecialchars($row['color_mouse']) ?></td>
                                <td><?= htmlspecialchars($row['connectivity_mouse']) ?></td>
                                <td><?= htmlspecialchars($row['price_mouse']) ?></td>
                                <td class="container-btn-actions-admin">
                                    <form class="form-crud-admin" method="post">
                                        <input type="hidden" name="id_mouse" value="<?= $row['id_mouse'] ?>">
                                        <input type="hidden" name="actionGamingMouse" value="delete"> <!-- Utilizando action3 en lugar de action_chair -->
                                        <button class="delte-btn-admin" type="submit">Eliminar</button>
                                    </form>
                                    <!-- Botón para editar -->
                                    <button class="edit-btn-admin" onclick="editRecordMouse(
                                '<?= $row['id_mouse'] ?>',
                                '<?= $row['name_mouse'] ?>',
                                '<?= $row['brand_mouse'] ?>',
                                '<?= $row['color_mouse'] ?>',
                                '<?= $row['connectivity_mouse'] ?>',

                                '<?= $row['price_mouse'] ?>'
                            )">Editar</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    function editRecordMouse(id_mouse, name_mouse, brand_mouse, color_mouse, connectivity_mouse, price_mouse) {
                        document.querySelector('[name="id_mouse"]').value = id_mouse;
                        document.querySelector('[name="name_mouse"]').value = name_mouse;
                        document.querySelector('[name="brand_mouse"]').value = brand_mouse;
                        document.querySelector('[name="color_mouse"]').value = color_mouse;
                        document.querySelector('[name="connectivity_mouse"]').value = connectivity_mouse;
                        document.querySelector('[name="price_mouse"]').value = price_mouse;

                        document.querySelector('[name="actionGamingMouse"]').value = 'edit'; // action_chair en lugar de action
                    }
                </script>
            </article>

            <!-- Gaming gamingMicrophones CRUD -->
            <article class="information5-container-register-admin tabcontent" id="gamingMicrophones">
                <!-- Formulario para añadir/editar -->
                <form class="form-information2-container-register-admin" method="post">
                    <input class="input-form-information2-registr-admin" type="hidden" name="id_microphone" value="">
                    <input class="input-form-information2-registr-admin" type="hidden" name="actionGamingMicrophones" value="add"> <!-- action_chair en lugar de action3 -->
                    <input class="input-form-information2-registr-admin" type="text" name="name_microphone" placeholder="Name" required>
                    <input class="input-form-information2-registr-admin" type="text" name="brand_microphone" placeholder="Brand" required>
                    <input class="input-form-information2-registr-admin" type="text" name="color_microphone" placeholder="Color" required>
                    <input class="input-form-information2-registr-admin" type="text" name="special_feature_microphone" placeholder="Special Feature" required>
                    <input class="input-form-information2-registr-admin" type="text" name="price_microphone" placeholder="Price" required>
                    <button class="btnSaveIt" type="submit">Guardar</button>
                    <button class="btnSaveIt" type="button" onclick="generatePDF9()">Generar Reporte</button>
                </form>

                <!-- Tabla de datos -->
                <table class="table-columns-gamingMicrophones-admin" border="1">
                    <thead>
                        <tr>
                            <!-- Encabezados de columnas -->
                            <th class="columns-table-register-admin">ID</th>
                            <th class="columns-table-register-admin">NAME</th>
                            <th class="columns-table-register-admin">BRAND</th>
                            <th class="columns-table-register-admin">COLOR</th>
                            <th class="columns-table-register-admin">SPECIAL FEATURE</th>
                            <th class="columns-table-register-admin">PRICE</th>
                            <th class="columns-table-register-admin">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_microphones as $row) : ?>
                            <tr>
                                <td><?= htmlspecialchars($row['id_microphone']) ?></td>
                                <td><?= htmlspecialchars($row['name_microphone']) ?></td>
                                <td><?= htmlspecialchars($row['brand_microphone']) ?></td>
                                <td><?= htmlspecialchars($row['color_microphone']) ?></td>
                                <td><?= htmlspecialchars($row['special_feature_microphone']) ?></td>
                                <td><?= htmlspecialchars($row['price_microphone']) ?></td>
                                <td class="container-btn-actions-admin">
                                    <form class="form-crud-admin" method="post">
                                        <input type="hidden" name="id_microphone" value="<?= $row['id_microphone'] ?>">
                                        <input type="hidden" name="actionGamingMicrophones" value="delete"> <!-- Utilizando action3 en lugar de action_chair -->
                                        <button class="delte-btn-admin" type="submit">Eliminar</button>
                                    </form>
                                    <!-- Botón para editar -->
                                    <button class="edit-btn-admin" onclick="editRecordMicrophones(
                                '<?= $row['id_microphone'] ?>',
                                '<?= $row['name_microphone'] ?>',
                                '<?= $row['brand_microphone'] ?>',
                                '<?= $row['color_microphone'] ?>',
                                '<?= $row['special_feature_microphone'] ?>',

                                '<?= $row['price_microphone'] ?>'
                            )">Editar</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    function editRecordMicrophones(id_microphone, name_microphone, brand_microphone, color_microphone, special_feature_microphone, price_microphone) {
                        document.querySelector('[name="id_microphone"]').value = id_microphone;
                        document.querySelector('[name="name_microphone"]').value = name_microphone;
                        document.querySelector('[name="brand_microphone"]').value = brand_microphone;
                        document.querySelector('[name="color_microphone"]').value = color_microphone;
                        document.querySelector('[name="special_feature_microphone"]').value = special_feature_microphone;
  
                        document.querySelector('[name="price_microphone"]').value = price_microphone;


                        document.querySelector('[name="actionGamingMicrophones"]').value = 'edit'; // action_chair en lugar de action
                    }
                </script>
            </article>

            <!-- Gaming gamingHeadsets CRUD -->
            <article class="information5-container-register-admin tabcontent" id="gamingHeadsets">
                <!-- Formulario para añadir/editar -->
                <form class="form-information2-container-register-admin" method="post">
                    <input class="input-form-information2-registr-admin" type="hidden" name="id_headset" value="">
                    <input class="input-form-information2-registr-admin" type="hidden" name="actionGamingHeadsets" value="add"> <!-- action_chair en lugar de action3 -->
                    <input class="input-form-information2-registr-admin" type="text" name="name_headset" placeholder="Name" required>
                    <input class="input-form-information2-registr-admin" type="text" name="brand_headset" placeholder="Brand" required>
                    <input class="input-form-information2-registr-admin" type="text" name="wireless_interface_headset" placeholder="Wireless" required>
                    <input class="input-form-information2-registr-admin" type="text" name="form_factor_headset" placeholder="Form Factor" required>
                    <input class="input-form-information2-registr-admin" type="text" name="price_headset" placeholder="Price" required>
                    <button class="btnSaveIt" type="submit">Guardar</button>
                    <button class="btnSaveIt" type="button" onclick="generatePDF10()">Generar Reporte</button>
                </form>

                <!-- Tabla de datos -->
                <table class="table-columns-gamingHeadsets-admin" border="1">
                    <thead>
                        <tr>
                            <!-- Encabezados de columnas -->
                            <th class="columns-table-register-admin">ID</th>
                            <th class="columns-table-register-admin">NAME</th>
                            <th class="columns-table-register-admin">BRAND</th>
                            <th class="columns-table-register-admin">WIRELESS INTERFACE</th>
                            <th class="columns-table-register-admin">FORM FACTOR</th>
                            <th class="columns-table-register-admin">PRICE</th>
                            <th class="columns-table-register-admin">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_headset as $row) : ?>
                            <tr>
                                <td><?= htmlspecialchars($row['id_headset']) ?></td>
                                <td><?= htmlspecialchars($row['name_headset']) ?></td>
                                <td><?= htmlspecialchars($row['brand_headset']) ?></td>
                                <td><?= htmlspecialchars($row['wireless_interface_headset']) ?></td>
                                <td><?= htmlspecialchars($row['form_factor_headset']) ?></td>
                                <td><?= htmlspecialchars($row['price_headset']) ?></td>
                                <td class="container-btn-actions-admin">
                                    <form class="form-crud-admin" method="post">
                                        <input type="hidden" name="id_headset" value="<?= $row['id_headset'] ?>">
                                        <input type="hidden" name="actionGamingHeadsets" value="delete"> <!-- Utilizando action3 en lugar de action_chair -->
                                        <button class="delte-btn-admin" type="submit">Eliminar</button>
                                    </form>
                                    <!-- Botón para editar -->
                                    <button class="edit-btn-admin" onclick="editRecordHeadsets(
                                '<?= $row['id_headset'] ?>',
                                '<?= $row['name_headset'] ?>',
                                '<?= $row['brand_headset'] ?>',
                                '<?= $row['wireless_interface_headset'] ?>',
                                '<?= $row['form_factor_headset'] ?>',

                                '<?= $row['price_headset'] ?>'
                            )">Editar</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    function editRecordHeadsets(id_headset, name_headset, brand_headset, wireless_interface_headset, form_factor_headset, price_headset) {
                        document.querySelector('[name="id_headset"]').value = id_headset;
                        document.querySelector('[name="name_headset"]').value = name_headset;
                        document.querySelector('[name="brand_headset"]').value = brand_headset;
                        document.querySelector('[name="wireless_interface_headset"]').value = wireless_interface_headset;
                        document.querySelector('[name="form_factor_headset"]').value = form_factor_headset;

                        document.querySelector('[name="price_headset"]').value = price_headset;

                        document.querySelector('[name="actionGamingHeadsets"]').value = 'edit'; // action_chair en lugar de action
                    }
                </script>
            </article>

            <!-- Gaming playStationControls CRUD -->
            <article class="information5-container-register-admin tabcontent" id="playStationControls">
                <!-- Formulario para añadir/editar -->
                <form class="form-information2-container-register-admin" method="post">
                    <input class="input-form-information2-registr-admin" type="hidden" name="id_play" value="">
                    <input class="input-form-information2-registr-admin" type="hidden" name="actionGamingPlay" value="add"> <!-- action_chair en lugar de action3 -->
                    <input class="input-form-information2-registr-admin" type="text" name="name_play" placeholder="Name" required>
                    <input class="input-form-information2-registr-admin" type="text" name="brand_play" placeholder="Brand" required>
                    <input class="input-form-information2-registr-admin" type="text" name="color_play" placeholder="Color" required>
                    <input class="input-form-information2-registr-admin" type="text" name="technology_connectivit_play" placeholder="Technology Connectivity" required>
                    <input class="input-form-information2-registr-admin" type="text" name="connectivity_play" placeholder="Connectivity" required>
                    <input class="input-form-information2-registr-admin" type="text" name="price_play" placeholder="Price" required>
                    <button class="btnSaveIt" type="submit">Guardar</button>
                    <button class="btnSaveIt" type="button" onclick="generatePDF11()">Generar Reporte</button>
                </form>

                <!-- Tabla de datos -->
                <table class="table-columns-playStationControls-admin" border="1">
                    <thead>
                        <tr>
                            <!-- Encabezados de columnas -->
                            <th class="columns-table-register-admin">ID</th>
                            <th class="columns-table-register-admin">NAME</th>
                            <th class="columns-table-register-admin">BRAND</th>
                            <th class="columns-table-register-admin">COLOR</th>
                            <th class="columns-table-register-admin">TECHNOLOGY CONNECTIVITY</th>
                            <th class="columns-table-register-admin">CONNECTIVITY</th>
                            <th class="columns-table-register-admin">PRICE</th>
                            <th class="columns-table-register-admin">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_play as $row) : ?>
                            <tr>
                                <td><?= htmlspecialchars($row['id_play']) ?></td>
                                <td><?= htmlspecialchars($row['name_play']) ?></td>
                                <td><?= htmlspecialchars($row['brand_play']) ?></td>
                                <td><?= htmlspecialchars($row['color_play']) ?></td>
                                <td><?= htmlspecialchars($row['technology_connectivit_play']) ?></td>
                                <td><?= htmlspecialchars($row['connectivity_play']) ?></td>
                                <td><?= htmlspecialchars($row['price_play']) ?></td>
                                <td class="container-btn-actions-admin">
                                    <form class="form-crud-admin" method="post">
                                        <input type="hidden" name="id_play" value="<?= $row['id_play'] ?>">
                                        <input type="hidden" name="actionGamingPlay" value="delete"> <!-- Utilizando action3 en lugar de action_chair -->
                                        <button class="delte-btn-admin" type="submit">Eliminar</button>
                                    </form>
                                    <!-- Botón para editar -->
                                    <button class="edit-btn-admin" onclick="editRecordPlay(
                                '<?= $row['id_play'] ?>',
                                '<?= $row['name_play'] ?>',
                                '<?= $row['brand_play'] ?>',
                                '<?= $row['color_play'] ?>',
                                '<?= $row['technology_connectivit_play'] ?>',
                                '<?= $row['connectivity_play'] ?>',

                                '<?= $row['price_play'] ?>'
                            )">Editar</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    function editRecordPlay(id_play, name_play, brand_play, color_play, technology_connectivit_play, connectivity_play, price_play) {
                        document.querySelector('[name="id_play"]').value = id_play;
                        document.querySelector('[name="name_play"]').value = name_play;
                        document.querySelector('[name="brand_play"]').value = brand_play;
                        document.querySelector('[name="color_play"]').value = color_play;
                        document.querySelector('[name="technology_connectivit_play"]').value = technology_connectivit_play;
                        document.querySelector('[name="connectivity_play"]').value = connectivity_play;

                        document.querySelector('[name="price_play"]').value = price_play;

                        document.querySelector('[name="actionGamingPlay"]').value = 'edit'; // action_chair en lugar de action
                    }
                </script>
            </article>

        </section>
    </section>

    <script src="js/accessories.js"></script>
    <script src="js/report.js"></script>

</body>

</html>