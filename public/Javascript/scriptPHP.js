
const quizData = [
    {
        question: "1. Trình dịch PHP nào là trình dịch bạn cho là đúng?",
        a: "PHP Interpreter",
        b: "PHP Translator",
        c: "PHP Communicator",
        d: "Không có câu nào đúng",
        correct: "a"
    },
    {
        question: "2. Engine nào là nền tảng chính của PHP?",
        a: "ZEDAT",
        b: "ZEND",
        c: "ZENAT",
        d: "ZETA",
        correct: "b"
    },
    {
        question: "3. Kết quả cho đoạn code sau là gì? <?php $x=array(1,3,2,3,7,8,9,7,3); $y=array_count_value($x); echo $y[8];",
        a: "43",
        b: "6",
        c: "8",
        d: "1",
        correct: "b"
    },
    {
        question: "4. Khi thực thi PHP4 Script nó nhanh hơn PHP3 mấy lần?",
        a: "Gấp 25",
        b: "Gấp 3",
        c: "Gấp 40",
        d: "Gấp 100",
        correct: "d"
    },
    {
        question: "5. Cài đặt Apache xong bạn có thể kiểm tra severname của bạn qua cách gọi url http://localhost , ngoài cách này còn cách nào khác nữa không?",
        a: "http://127.0.0.1",
        b: "http://127.0.1.0",
        c: "http://127.0.0.0",
        d: "http://000.0.0.0",
        correct: "a"
    },
    {
        question: "6. Khi sử dụng bộ PHP & Apache bạn phải trả?",
        a: "15$/month",
        b: "150$/year",
        c: "50$/month",
        d: "free",
        correct: "d"
    },
    {
        question: "7. Ai là người đầu tiên phát minh ra PHP?",
        a: "James Gosling",
        b: "Tim Berners-Lee",
        c: "Todd Fast",
        d: "Rasmus Lerdorf",
        correct: "d"
    },
    {
        question: "8. PHP dựa theo syntax của ngôn ngữ nào?",
        a: "Basic",
        b: "Pascal",
        c: "C",
        d: "VB Script",
        correct: "c"
    },
    {
        question: "9. W tượng trưng cho cụm từ nào trong gói WAMP?",
        a: "Word",
        b: "Windows",
        c: "Whistler",
        d: "Whistler",
        correct: "b"
    },
    {
        question: "10. Trước khi đổi thành PHP: Hypertext Preprocessor nguồn gốc của nó xuất phát từ cụm từ nào?",
        a: "Preminum Handled Processor",
        b: "Personal HomePage Tools",
        c: "Printed Homepage Product",
        d: "Personal Hightec Processor",
        correct: "b"
    },
];

const quiz = document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')

let currentQuiz = 0
let score = 0

loadQuiz()
function loadQuiz(){
    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers(){
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected(){
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked){
            answer = answerEl.id
        }
    })
    return answer
}

submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer){
        if(answer === quizData[currentQuiz].correct){
            score++
        }
        currentQuiz++

        if(currentQuiz < quizData.length){
            loadQuiz()
        }else{
            quiz.innerHTML = `
            <h2>Bạn đúng ${score}/${quizData.length} số câu <h2>
            <h2>Số điểm của bạn là: ${score * 1} điểm <h2>
            <button onclick="location.reload()">Reload</button>
            <button><a href="/" style="text-decoration: none;color:#fff;">Back To Home</a></button>
            `
        }
    }
})
