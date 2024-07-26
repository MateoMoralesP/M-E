<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro de Boda</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            text-align: center;
            margin-top: 20px;
        }

        canvas {
            display: block;
            margin: 20px auto;
            border: 5px solid #ccc;
        }

        .filters button {
            margin: 10px;
        }

        .frame-decor {
            position: absolute;
            pointer-events: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <input type="file" id="upload" class="form-control-file mb-3" accept="image/*">
                <div class="position-relative">
                    <canvas id="canvas"></canvas>
                    <div class="frame-decor" id="frame-decor"></div>
                </div>
                <div class="filters">
                    <button class="btn btn-primary" onclick="applyWeddingFrame()">Aplicar Marco de Boda</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = new Image();
                img.onload = function() {
                    const canvas = document.getElementById('canvas');
                    const ctx = canvas.getContext('2d');
                    canvas.width = img.width;
                    canvas.height = img.height;
                    ctx.drawImage(img, 0, 0);

                    // Ajustar la decoracion del marco al tamaño de la imagen
                    adjustFrameDecor();
                }
                img.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        function applyWeddingFrame() {
            const canvas = document.getElementById('canvas');
            const ctx = canvas.getContext('2d');
            const width = canvas.width;
            const height = canvas.height;

            // Dibujar un marco alrededor de la imagen
            const frameThickness = Math.min(width, height) * 0.05;
            ctx.lineWidth = frameThickness;
            ctx.strokeStyle = '#FFD700'; // Dorado
            ctx.strokeRect(frameThickness / 2, frameThickness / 2, width - frameThickness, height - frameThickness);

            // Añadir las iniciales M&E en la parte inferior del marco
            ctx.font = `${frameThickness}px serif`;
            ctx.fillStyle = '#FFD700';
            ctx.textAlign = 'center';
            ctx.fillText('M & E', width / 2, height - frameThickness / 2 - 10);

            // Otras decoraciones del marco
            // Aquí puedes añadir más elementos decorativos si lo deseas
            const frameDecor = document.getElementById('frame-decor');
            frameDecor.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 ${width} ${height}">
            <circle cx="${width / 2}" cy="${height / 2}" r="${width / 2 - frameThickness}" stroke="#FFD700" stroke-width="5" fill="none" />
            <text x="50%" y="95%" dominant-baseline="middle" text-anchor="middle" font-size="${frameThickness}px" fill="#FFD700">M & E</text>
        </svg>
    `;
        }

        function adjustFrameDecor() {
            const canvas = document.getElementById('canvas');
            const frameDecor = document.getElementById('frame-decor');
            frameDecor.style.width = `${canvas.width}px`;
            frameDecor.style.height = `${canvas.height}px`;
        }
    </script>
</body>

</html>