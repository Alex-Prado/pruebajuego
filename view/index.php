<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /* font-family: Poppins, sans-serif; */
  /* font-family: "Roboto Condensed", sans-serif; */
  scroll-behavior: smooth;
  user-select: none !important;
}
.panel-modal {
  position: fixed;
  height: 100vh;
  backdrop-filter: blur(25px);
  width: 100%;
  max-width: 100%;
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: start;
  visibility: hidden;
}
button{
    padding: 1rem;
    border: none;
    margin: 15px;
    cursor: pointer;
}
input[type=button]{
    padding: 1rem;
    margin: 15px;
}
.none{
    display: none;
}
.cerrar {
  width: 30px;
  height: 30px;
  border: 1px solid #999;
  font-size: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 80px;
  right: 10px;
  cursor: pointer;
}
.bien{
    background: greenyellow;
}
.mal{
    background-color: red;
}
.panel-modal.active {
  visibility: visible;
}
.modal{
    width: 500px;
    height: 200px;
    border: 1px solid;
}
</style>
<body>
    <input type="button" class="juego" onclick="toggle();" value="JUGAR">
 
    <div class="panel-modal">
        <div class="modal" id="modal">
        
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../src/Pregunta.js"></script>
    <script>
      
    </script>
</body>
</html>