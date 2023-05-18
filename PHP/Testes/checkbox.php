<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="checkbox" id="chk_all">
    <label><b>Selecionar tudo</b></label>
   <?php 
        $a = array("Picole","Sorvete","Fruta","Chocolate");
        $q = count($a);
        for($i = 1; $i < $q; $i++){
            foreach($a as $r) {
                echo("<br> <input type='checkbox' class='check' id'check_$r>
                <label>$r</label>");
            }
        }
   ?> 

    <script>
        let checkbox = document.querySelectorAll('.check')
        let chk_all = document.querySelector('#chk_all')

        chk_all.addEventListener('click', () => {
            for(let current of checkbox) {
                 current.checked = !current.checked
            }
        })
    </script>

  
</body>
</html>