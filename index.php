<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unit Converter</title>

    <style>
        body {
            font-family: 'Comic Sans MS', sans-serif !important;
            font-size: 18px;
        }
        .tab {
            overflow: hidden;
        }

        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 10px 16px;
            transition: 0.3s;
            font-size: 17px;
            font-family: 'Comic Sans MS', 'Segoe Script', cursive;
        }

        .tab button:hover {
            color: cyan;
        }

        .tab button.active {
            color: dodgerblue;
            border-bottom: 2px solid dodgerblue;
        }

        .tabcontent {
            display: none;
            padding: 6px 12px;
        }

        form div {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .btn {
            margin-top: 5px;
            font-family: 'Comic Sans MS', 'Segoe Script', cursive;
            font-size: 18px;
            color: #000;
            background-color: #f8f8f8;
            border: 2px solid #222;
            border-radius: 6px;
            padding: 6px 20px;
            cursor: pointer;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2)
            transition: all 0.2s ease-in-out;
        }

        .btn:hover {
            background-color: #eee;
            transform: scale(1.03);
        }

        .btn:active {
            transform: scale(0.97);
            box-shadow: none;
        }

        input {
            font-size: 16px;
            font-family: 'Comic Sans MS', 'Kalam', cursive;
            color: #000;
            background-color: #f9f9f9;

            border: 2px solid #222;
            border-radius: 6px;

            outline: none;
            transition: all 0.2s ease;
        }

        input:focus {
            background-color: #fff;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
        }

        select {
            padding: 2px 10px;
            font-size: 16px;
            font-family: 'Handlee', 'Comic Sans MS', cursive;
            color: #000;
            background-color: #f9f9f9;

            border: 2px solid #222;
            border-radius: 6px;
            outline: none;
            cursor: pointer;
            appearance: none;
            transition: all 0.2s ease;
        }

        select:focus {
            background-color: #fff;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
        }

        select {
            background-image: url("data:image/svg+xml;utf8,<svg fill='black' height='12' width='12' xmlns='http://www.w3.org/2000/svg'><path d='M2 4l4 4 4-4'/></svg>");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 12px;
        }
    </style>
</head>
<body>

<?php
/**
 * @var float  $result
 * @var string $activeTab
 */
require_once 'UnitConverter.php';
?>

<div style="margin: 2% auto; width: fit-content; ">
    <div style="border: 2px solid black; border-radius: 5px;  padding: 15px;  ">
        <div style="margin-bottom: 10px; font-size: 24px; font-weight: bold;">
            Unit Converter
        </div>

        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'Length')">Length</button>
            <button class="tablinks" onclick="openTab(event, 'Weight')">Weight</button>
            <button class="tablinks" onclick="openTab(event, 'Temperature')">Temperature</button>
        </div>

        <div id="Length" class="tabcontent">
            <?php
            if (empty($result) || $result === 0): ?>
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div>
                        <input type="hidden" name="type" value="length">
                        <label for="value">Enter the length to convert</label>
                        <input type="number" id="value" name="length_value" required>

                        <label for="from">Unit to Convert from</label>
                        <select id="from" name="length_from">
                            <option value="0">mm</option>
                            <option value="1">cm</option>
                            <option value="2">m</option>
                            <option value="3">km</option>
                            <option value="4">in</option>
                            <option value="5">ft</option>
                            <option value="6">yd</option>
                            <option value="7">mi</option>
                        </select>

                        <label for="to">Unit to Convert to</label>
                        <select id="to" name="length_to">
                            <option value="0">mm</option>
                            <option value="1">cm</option>
                            <option value="2">m</option>
                            <option value="3">km</option>
                            <option value="4">in</option>
                            <option value="5">ft</option>
                            <option value="6">yd</option>
                            <option value="7">mi</option>
                        </select>

                        <input class="btn" type="submit" value="Convert">
                    </div>
                </form>
            <?php
            else: ?>
                <div style="margin-top: 10px;">
                    <p style="font-weight: bold;">Result of your calculation</p>
                    <p><?= $result ?></p>
                    <form method="get" action="">
                        <button class="btn" type="submit">Reset</button>
                    </form>
                </div>
            <?php
            endif; ?>
        </div>

        <div id="Weight" class="tabcontent">
            <?php
            if (empty($result) || $result === 0): ?>
                <form action="<?php
                echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div>
                        <input type="hidden" name="type" value="weight">
                        <label for="value">Enter the weight to convert</label>
                        <input type="number" id="value" name="weight_value">
                        <label for="from">Unit to Convert from</label>
                        <select id="from" name="weight_from">
                            <option value="0">mg</option>
                            <option value="1">g</option>
                            <option value="2">kg</option>
                            <option value="3">oz</option>
                            <option value="4">lb</option>
                        </select>
                        <label for="to">Unit to Convert to</label>
                        <select id="to" name="weight_to">
                            <option value="0">mg</option>
                            <option value="1">g</option>
                            <option value="2">kg</option>
                            <option value="3">oz</option>
                            <option value="4">lb</option>
                        </select>

                        <input class="btn" type="submit" value="Convert">
                    </div>
                </form>

            <?php
            else: ?>
                <div style="margin-top: 10px;">
                    <p style="font-weight: bold;">Result of your calculation</p>
                    <p><?= $result ?></p>
                    <form method="get" action="">
                        <button class="btn" type="submit">Reset</button>
                    </form>
                </div>
            <?php
            endif; ?>
        </div>

        <div id="Temperature" class="tabcontent">
            <?php
            if (empty($result) || $result === 0): ?>
                <form action="<?php
                echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div>
                        <input type="hidden" name="type" value="temperature">
                        <label for="value">Enter the temperature to convert</label>
                        <input type="number" id="value" name="temperature_value">
                        <label for="from">Unit to Convert from</label>
                        <select id="from" name="from">
                            <option value="0">°C</option>
                            <option value="1">°F</option>
                            <option value="2">K</option>
                        </select>
                        <label for="to">Unit to Convert to</label>
                        <select id="to" name="temperature_to">
                            <option value="0">°C</option>
                            <option value="1">°F</option>
                            <option value="2">K</option>
                        </select>

                        <input class="btn" type="submit" value="Convert">
                    </div>
                </form>
            <?php
            else: ?>
                <div style="margin-top: 10px;">
                    <p style="font-weight: bold;">Result of your calculation</p>
                    <p><?= $result ?></p>
                    <form method="get" action="">
                        <button class="btn" type="submit">Reset</button>
                    </form>
                </div>
            <?php
            endif; ?>
        </div>
    </div>
</div>

<script>
    function openTab (evt, tabName) {
        var i, tabcontent, tablinks
        tabcontent = document.getElementsByClassName('tabcontent')
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = 'none'
        }
        tablinks = document.getElementsByClassName('tablinks')
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(' active', '')
        }
        document.getElementById(tabName).style.display = 'block'
        evt.currentTarget.className += ' active'
    }

    const defaultTab = "<?= $activeTab ?>"
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.tablinks').forEach(btn => {
            if (btn.textContent.trim() === defaultTab) {
                btn.click()
            }
        })
    })
</script>
</body>
</html>
