<style>
    body {
        margin: 0;
        font-family: 'Times New Roman';
        background-color: #f4f4f4;
        color: #333;
    }
    hr{
            border-top: 1px solid red;}

    .navbar {
        display: flex;
        justify-content: center;
        background-color: white;
        padding: 10px;
    }

    .navbar div {
        margin: 0 10px;
    }

    .navbar a {
        text-decoration: none;
        color: white;
        background-color: #0000b9;
        padding: 10px 20px;
        font-weight: bold;
        transition: background-color 0.3s;
        display: inline-block;
        margin-top: 10px;
    }
    .navbar .activo a {
        color: red;
        text-decoration: underline;
        }

    .navbar a:hover {
        background-color: #0000a0;
    }

    ..navbar a{
        background-color: blue;
        padding: 10px;
        border-radius: 5px;
        color: white;
        text-decoration: none;

        }
</style>
</head>
<body>
<div class="navbar">
<div class="{{ setActivo ('inicio') }}"><a href="/">Inicio</a></div>
<div class="{{ setActivo('programas') }}"><a href="programas">Programas</a></div>
<div class="{{ setActivo('talleres') }}"><a href="talleres">Talleres</a></div>
<div class="{{ setActivo('asesoramiento') }}"><a href="asesoramiento">Asesoramiento</a></div>
<div class="{{ setActivo('contacto') }}"><a href="contacto">Contacto</a></div>
</div>
</body>
