const quizData = [
    {
        question: "1. Đâu là câu SAI về ngôn ngữ Java?",
        a: "Ngôn ngữ Java có phân biệt chữ hoa – chữ thường",
        b: "Java là ngôn ngữ lập trình hướng đối tượng",
        c: "Dấu chấm phẩy được sử dụng để kết thúc lệnh trong java",
        d: "Chương trình viết  bằng Java chỉ có thể chạy trên hệ điều hành win",
        correct: "d"
    },
    {
        question: "2. Đâu không phải là một kiểu dữ liệu nguyên thủy trong Java?",
        a: "double",
        b: "int",
        c: "long",
        d: "long float",
        correct: "d"
    },
    {
        question: "3. Trong câu lệnh sau: public static void main(String[] agrs) thì phần tử agrs[0] chứa giá trị gì?",
        a: "Tên của chương trình",
        b: "Số lượng tham số",
        c: "Tham số đầu tiên của danh sách tham số",
        d: "Không câu nào đúng",
        correct: "c"
    },
    {
        question: "4. Phương thức next() của lớp Scanner dùng để làm gì?",
        a: "Nhập một số nguyên",
        b: "Nhập một ký tự",
        c: "Nhập một chuỗi",
        d: "Không có phương thức này",
        correct: "c"
    },
    {
        question: "5. Muốn chạy được chương trình java, chỉ cần cài phần mền nào sau đây?",
        a: "Netbeans",
        b: "Eclipse",
        c: "JDK",
        d: "Java Platform",
        correct: "d"
    },
    {
        question: "6. Gói nào trong java chứa lớp Scanner dùng để nhập dữ liệu từ bàn phím?",
        a: "java.net",
        b: "java.io ",
        c: "java.util",
        d: "java.awt",
        correct: "c"
    },
    {
        question: "7. Phương thức nextLine() thuộc lớp nào?",
        a: "String",
        b: "Scanner",
        c: "Integer",
        d: "System",
        correct: "b"
    },
    {
        question: "8. Tên đầu tiên của Java là gì?",
        a: "Java",
        b: "Oak",
        c: "Cafe",
        d: "James golings",
        correct: "b"
    },
    {
        question: "9. G/s đã định nghĩa lớp XX với một phương thức thông thường là Display, sau đó sinh ra đối tượng objX từ lớp XX. Để gọi phương thức Display ta sử dụng cú pháp nào?",
        a: "XX.Display; ",
        b: "XX.Display();",
        c: "objX.Display();",
        d: "Display();",
        correct: "c"
    },
    {
        question: "10. Đâu KHÔNG phải là thành phần trong cấu trúc của lớp trong java?",
        a: "Tên lớp",
        b: "Thuộc tính ",
        c: "Phương thức",
        d: "Biến",
        correct: "d"
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