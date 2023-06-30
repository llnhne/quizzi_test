const quizData = [
    {
        question: "1. Trong SQL, mệnh đề ALTER TABLE dùng để làm gì?",
        a: "Dùng để thêm, xoá và sửa đổi các cột trong một bảng đã có. ",
        b: "Dùng để chèn dữ liệu vào bảng trong cơ sở dữ liệu.",
        c: "Dùng để xóa bảng trong cơ sở dữ liệu.",
        d: "Dùng để xóa dữ liệu khỏi bảng trong cơ sở dữ liệu.",
        correct: "a"
    },
    {
        question: "2. Mệnh đề HAVING chỉ có thể được sử dụng với...",
        a: "Câu lệnh INSERT",
        b: "Câu lệnh JOIN",
        c: "Câu lệnh DELETE",
        d: "Câu lệnh SELECT",
        correct: "c"
    },
    {
        question: "3. Khẳng định nào sau đây là đúng?",
        a: "TRUNCATE TABLE phải được sử dụng cùng với mệnh đề WHERE.",
        b: "TRUNCATE TABLE có chức năng tương tự như lệnh DELETE nhưng không có mệnh đề WHERE và đều được sử dụng để xóa các bản ghi từ một bảng đang tồn tại trong SQL.",
        c: "TRUNCATE TABLE xóa bảng khỏi cơ sở dữ liệu",
        d: "Khác",
        correct: "b"
    },
    {
        question: "4. Câu lệnh SQL nào sau đây là đúng?",
        a: "SELECT * FROM Sales WHERE Date BETWEEN '10/12/2005' AND '01/01/2006'",
        b: "SELECT FROM Sales WHERE Date BETWEEN '10/12/2005' AND '01/01/2006'",
        c: "SELECT FROM Sales WHERE Date BETWEEN ('10/12/2005', '01/01/2006')",
        d: "Khác",
        correct: "a"
    },
    {
        question: "5. Câu lệnh CREATE TABLE dùng để làm gì?",
        a: "Tạo một bảng cơ sở dữ liệu mới",
        b: "Tạo một thủ tục lưu trữ",
        c: "Tạo chế độ xem cơ sở dữ liệu",
        d: "Khác",
        correct: "a"
    },
    {
        question: "6. RDBMS là viết tắt của...?",
        a: "Real Database Management System",
        b: "Relational Database Management System",
        c: "Read Database Master System",
        d: "Khác",
        correct: "b"
    },
    {
        question: "7. Hàm nào dưới đây là hàm tập hợp trong SQL?",
        a: "AVG",
        b: "LEN",
        c: "JOIN",
        d: "LEFT",
        correct: "a"
    },
    {
        question: "8. Lệnh SQL nào sau đây lấy ra chuỗi 'Success'?",
        a: "SELECT ' Success '",
        b: "SELECT 'Success",
        c: "SELECT LEFT('Success is all I need.', 15)",
        d: "Khác",
        correct: "b"
    },
    {
        question: "9. Câu lệnh SQL sau đây làm gì:",
        a: "SELECT Khachhang, COUNT(Dondathang) FROM SalesGROUP BY Khachhang HAVING COUNT(Dondathang) >5",
        b: "Chọn tất cả khách hàng từ bảng Sales đã thực hiện hơn 5 đơn hàng.",
        c: "Chọn tất cả khách hàng từ bảng Sales.",
        d: "Chọn tổng số đơn đặt hàng từ bảng Sales, nếu số này lớn hơn 5",
        correct: "a"
    },
    {
        question: "10. Câu lệnh SQL nào sau đây sẽ chọn tất cả các bản ghi với tất cả các cột của chúng từ một bảng có tên là Sales?",
        a: "DELETE FROM Sales",
        b: "SELECT * FROM SALES WHERE OrderID < 1",
        c: "SELECT * FROM Sales",
        d: "Khác",
        correct: "c"
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