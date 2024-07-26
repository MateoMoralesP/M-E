<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz con Tiempo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        #quiz-container {
            max-width: 600px;
            margin: auto;
        }

        .card {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="quiz-container" class="mt-5">
            <div id="question-container" class="card">
                <div class="card-body">
                    <h5 id="question" class="card-title"></h5>
                    <div id="answers" class="btn-group-vertical" role="group"></div>
                    <div id="feedback" class="mt-3"></div>
                </div>
                <div class="card-footer text-muted">
                    Tiempo restante: <span id="timer">10</span> segundos
                </div>
            </div>
            <div id="result-container" class="mt-3"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const questions = [{
                question: "¿Dónde fue su primera cita?",
                answers: ["En un restaurante", "En el cine", "En un parque", "En una cafetería"],
                correct: "En un parque"
            },
            {
                question: "¿Cuántos años han estado juntos?",
                answers: ["1 año", "3 años", "6 años", "5 años"],
                correct: "5 años"
            },
            {
                question: "¿Cuál es la flor favorita de la novia?",
                answers: ["Rosas", "Lirios", "Tulipanes", "Margaritas"],
                correct: "Tulipanes"
            },
            {
                question: "¿Quién es el más romántico de los dos?",
                answers: ["Él", "Ella"],
                correct: "Ella"
            },
            {
                question: "¿Cuál es el restaurante favorito de la pareja?",
                answers: ["Italiano", "Mexicano", "Japonés", "Frances"],
                correct: "Italiano"
            },
            {
                question: "¿Qué tipo de clima prefieren para una cita romántica?",
                answers: ["Soleado y cálido", "Noche fresca y estrellada", "Lluvia ligera y acogedora", "Nieve suave y tranquila"],
                correct: "Noche fresca y estrellada"
            },
            {
                question: "¿Cuál es la fecha exacta de su aniversario novios?",
                answers: ["5 de marzo", "17 de marzo", "14 de diciembre", "16 septiembre"],
                correct: "17 de marzo"
            },
            {
                question: "¿Quién es más propenso a llegar tarde?",
                answers: ["Él", "Ella"],
                correct: "Ella"
            },
            {
                question: "¿Cuál es su comida favorita como pareja?",
                answers: ["Sushi", "Pizza", "Tacos", "Pasta"],
                correct: "Tacos"
            },
            {
                question: "¿Cuál fue el momento más embarazoso que han vivido juntos?",
                answers: ["Se les cayó el pastel de cumpleaños de un amigo", "Olvidaron las llaves y quedaron fuera de casa ", "Ninguno, son muy cuidadosos", "Se perdieron en un viaje"],
                correct: "Se perdieron en un viaje"
            }

        ];

        let currentQuestionIndex = 0;
        let timer;
        const timeLimit = 10;
        let timeLeft = timeLimit;
        let score = 0;

        function loadQuestion() {
            if (currentQuestionIndex < questions.length) {
                const questionData = questions[currentQuestionIndex];
                $("#question").text(questionData.question);
                $("#answers").empty();
                $("#feedback").empty();
                questionData.answers.forEach(answer => {
                    $("#answers").append(`<button class="btn btn-outline-primary btn-block answer-btn">${answer}</button>`);
                });
                timeLeft = timeLimit;
                $("#timer").text(timeLeft);
                startTimer();
            } else {
                showResults();
            }
        }

        function startTimer() {
            clearInterval(timer);
            timer = setInterval(() => {
                timeLeft--;
                $("#timer").text(timeLeft);
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    currentQuestionIndex++;
                    loadQuestion();
                }
            }, 1000);
        }

        function showResults() {
            $("#quiz-container").html(`<h3>¡Quiz completado!</h3><p>Respondiste correctamente ${score} de ${questions.length} preguntas.</p>`);
        }

        $(document).on("click", ".answer-btn", function() {
            clearInterval(timer);
            const selectedAnswer = $(this).text();
            const correctAnswer = questions[currentQuestionIndex].correct;

            if (selectedAnswer === correctAnswer) {
                score++;
                $("#feedback").html(`<div class="alert alert-success">¡Correcto!</div>`);
            } else {
                $("#feedback").html(`<div class="alert alert-danger">Incorrecto. La respuesta correcta es ${correctAnswer}.</div>`);
            }

            setTimeout(() => {
                currentQuestionIndex++;
                loadQuestion();
            }, 2000);
        });

        $(document).ready(function() {
            loadQuestion();
        });
    </script>
</body>

</html>