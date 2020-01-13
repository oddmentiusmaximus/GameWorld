window.onload = function() {
    function on() {
        document.getElementById("overlay").style.display = "block";
    }

    function off() {
        document.getElementById("overlay").style.display = "none";
    }
    const canvas = document.getElementById('snake');
    const ctx = canvas.getContext('2d');

    // grid size
    const grid = 15;

    // food
    let food = {
        x: Math.floor(Math.random() * 17 + 1) * grid,
        y: Math.floor(Math.random() * 15 + 3) * grid,
        draw: () => {
            ctx.fillStyle = 'red';
            ctx.fillRect(food.x, food.y, grid - 1, grid - 1);
        }
    }

    // snake
    let snake = {
        directon: 'R',
        cells: [],
        initCells: 4,
        init: () => {
            for (let i = 0; i < snake.initCells; i++) {
                snake.cells[i] = { x: 10 * grid, y: 9 * grid };
            }
        },
        draw: () => {
            for (let i = 0; i < snake.cells.length; i++) {

                if (snake.cells[i].x > canvas.height) snake.cells[i].x = 0;
                else if (snake.cells[i].x < 0) snake.cells[i].x = canvas.height - grid;
                if (snake.cells[i].y > canvas.width) snake.cells[i].y = 0;
                else if (snake.cells[i].y < 0) snake.cells[i].y = canvas.width - grid;


                ctx.fillStyle = i === 0 ? 'blue' : 'yellow';
                ctx.fillRect(snake.cells[i].x, snake.cells[i].y, grid - 1, grid - 1)
            }

            let dx = snake.cells[0].x;
            let dy = snake.cells[0].y;

            if (snake.directon === 'R') dx += grid
            if (snake.directon === 'L') dx -= grid
            if (snake.directon === 'U') dy -= grid
            if (snake.directon === 'D') dy += grid

            if (dx == food.x && dy == food.y) {
                food.x = Math.floor(Math.random() * 29 + 1) * grid
                food.y = Math.floor(Math.random() * 27 + 3) * grid
            } else {
                snake.cells.pop();
            }

            snake.checkCollision(dx, dy);

            snake.cells.unshift({ x: dx, y: dy });
        },
        checkCollision: (dx, dy) => {
            for (var i = 0; i < snake.cells.length; i++) {
                if (dx === snake.cells[i].x && dy === snake.cells[i].y) {
                    snake.cells = [];
                    snake.init();
                }
            }
        }
    }

    snake.init()

    // controller
    document.addEventListener('keydown', (e) => {
        const key = e.key;
        switch (key) {
            case 'ArrowUp':
                if (snake.directon === 'D') return;
                snake.directon = 'U'
                event.preventDefault();
                break;
            case 'ArrowDown':
                if (snake.directon === 'U') return;
                event.preventDefault();
                snake.directon = 'D'
                event.preventDefault();
                break;
            case 'ArrowRight':
                if (snake.directon === 'L') return;
                snake.directon = 'R'
                event.preventDefault();
                break;
            case 'ArrowLeft':
                if (snake.directon === 'R') return;
                snake.directon = 'L'
                event.preventDefault();
                break;
            case 'start':
                if (key == 13) return; //enter
                snake.init(); //start new game
                document.getElementById("score").innerHTML = " Score: 0";
                document.getElementById("overlay").style.display = "none"; //wipe overlay
                break;

            default:
                break;
        }
    })

    function draw() {
        document.getElementById('score').innerText = `Score: ${snake.cells.length - 4}`
        ctx.fillStyle = 'rgb(66, 116, 77)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        snake.draw();
        food.draw();
        ctx.fi
    }

    setInterval(draw, 1000 / 15);


}