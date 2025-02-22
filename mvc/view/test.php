<div class="container-flude" style="min-height: calc(100vh - 8rem);">
    <div id="controller" class="">
        <div class="d-flex justify-content-center mt-5" style="transform: translateY(50%);">
            <button id="start" class="btn px-4 py-2 bold btn-outline-light" style="min-width: 12rem;">Vocabulary test</button>
        </div>
        <div class="d-flex justify-content-center mt-5" style="transform: translateY(50%);">
            <button id="btn-test-sentences" class="btn px-4 py-2 bold btn-outline-light" style="min-width: 12rem;">Check sentences</button>
        </div>
        <div class="d-flex justify-content-center mt-5" style="transform: translateY(50%);">
            <button id="create" class="btn px-4 py-2 bold btn-outline-light" style="min-width: 12rem;">Create a quiz</button>
        </div>
        <div class="d-flex justify-content-center mt-5" style="transform: translateY(50%);">
            <button id="created" class="btn px-4 py-2 bold btn-outline-light" style="min-width: 12rem;" hidden>Created quiz</button>
        </div>
    </div>
    <div class="container mt-5">
        <div class="exam w-100" hidden>
            <form action="" class="mx-auto py-3 d-flex flex-column" style="max-width: 30rem;"
                method="post">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <div id="back" class="cs-hover p-1 d-flex justify-content-center align-items-center"><i class="fa-solid fa-arrow-left test-secondary"></i></div>
                    <div><span class="bold">Score: </span><span id="score" class="fs-5 bold text-light"></span></div>
                </div>
                <style>
                        #back,
                        #back-create {
                            border-radius: 100%;
                            width: 30px;
                            height: 30px;
                            transform: translateX(-.5rem);
                        }

                        #back:hover,
                        #back-create:hover {
                            background-color: rgba(255, 255, 255, .1);
                        }
                    </style>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3 id="meaning" class="mb-0"></h3>
                    <div class="d-flex align-items-center align-items-center gap-3">
                        <div class="btn-group dropup">
                            <div id="settings" class="cs-hover fs-5" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i hidden class="fa-solid fa-gear"></i>
                            </div>
                            <ul class="dropdown-menu border border-light">
                                <li><span class="dropdown-item-text text-nowrap">Press <b class="text-light">enter</b> to check</span></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><span class="dropdown-item-text text-nowrap">Press <b class="text-light">ctrl</b> to see the answer</span></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><span class="dropdown-item-text text-nowrap">Press <b class="text-light">tab</b> to next</span></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><span class="dropdown-item-text text-nowrap">Press <b class="text-light">;</b> to hear when the answer is correct</span></li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div id="restart" class="bold fs-5 p-0 m-0 cs-hover" hidden><i class="fa-solid fa-arrow-rotate-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-input w-100 d-flex position-relative">
                    <input type="text" id="word" name="word" class="form-control border-none w-100" hidden style="background-color: transparent;">
                    <input type="text" id="word_input" autocomplete="off" pattern="[A-Za-z]+" name="word" class="form-control w-100" placeholder=" " style="background-color: transparent; font-size: 24px; padding-right: 5rem;">
                    <span class="position-absolute"
                        style="left: 1rem; top: 50%; transform: translateY(-50%); user-select: none; pointer-events: none; ">Enter vocabulary</span>
                    <button class="btn btn-light position-absolute rounded-end bold" name="btn" id="btn-check"
                        style="right: 0; border-radius: 0; height: 100%;">
                        Check
                    </button>
                </div>

                <div class="d-flex mt-3">
                    <b class="see-answer me-2" onclick="viewAnswer(correct, wrong)">

                    </b>
                    <b class="correct-answer text-success fs-5"></b>
                    <b class="wrong-answer fs-5"></b>
                </div>
            </form>
            <div class="d-flex justify-content-between align-items-center" style="max-width: 30rem; margin: 0 auto;">
                <div class="text-center d-flex justify-content-between align-items-center">
                    <div id="icon-check" class="text-center d-flex justify-content-start align-items-center">

                    </div>
                </div>
                <div class="text-center d-flex justify-content-center align-items-center">
                    <button id="next" class="btn btn-outline-light">
                        <span id="skip">Next</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="create-test w-100">
            <form action="" id="form-create-test" class="mx-auto py-3" hidden style="max-width: 30rem;">
                <div class="d-flex">
                    <span id="back-create" class="cs-hover p-1 d-flex justify-content-center align-items-center mb-3"><i class="fa-solid fa-arrow-left test-secondary"></i></span>
                    <h3 id="meaning" class="mb-2">Create test</h3>
                </div>
                <div class="form-input w-100 d-flex position-relative">
                    <input type="number" id="number_words" name="word" class="form-control w-100" placeholder=" " style="background-color: transparent; font-size: 24px;">
                    <span class="position-absolute"
                        style="left: 1rem; top: 50%; transform: translateY(-50%); user-select: none; pointer-events: none; ">Enter the number of words you want to test
                    </span>
                    <button class="btn btn-light position-absolute rounded-end bold" name="btn" id="btn-create"
                        style="right: 0; border-radius: 0; height: 100%;">
                        Create
                    </button>
                </div>
            </form>
            <form action="" id="form-input-words" method="" hidden>
                <table id="table-input-words" class="table table-striped table-bordered border-secondary table-hover rounded"></table>
                <div class="d-flex justify-content-center">
                    <button id="create-test" class="btn btn-outline-light bold mb-3 px-5 py-2" hidden>Create test</button>
                </div>
            </form>
        </div>

    </div>

</div>
<script>
    const controller = document.querySelector('#controller')
    btnStart = document.querySelector('#start'),
        btnRetart = document.querySelector('#restart'),
        btnSettings = document.querySelector('#settings'),
        btnCreate = document.querySelector('#create'),
        inputNumberWord = document.querySelector('#number_words'),
        tableInputWords = document.querySelector('#table-input-words'),
        score = document.querySelector('#score'),
        meaning = document.querySelector('#meaning'),
        word_input = document.querySelector("#word_input"),
        table = document.querySelector('table'),
        btnNext = document.querySelector("#next"),
        answerCorrect = document.querySelector('.correct-answer'),
        answerWrong = document.querySelector('.wrong-answer'),
        seeAnswer = document.querySelector('.see-answer'),
        check = document.querySelector('#btn-check'),
        iconCheck = document.querySelector('#icon-check'),
        btnBack = document.querySelector('#back'),
        btnBackCreate = document.querySelector('#back-create'),
        btnTestSentences = document.querySelector('#btn-test-sentences'),
        btnCreated = document.querySelector('#created')
    storedArray = JSON.parse(localStorage.getItem('data'));

    let vocabularies = [],
        data = [],
        number,
        cntScore = 0;

    if (storedArray !== null) {
        btnCreated.hidden = false;
    }

    function hiddenController() {
        controller.classList.add('d-none')
    }

    function presentlyController() {
        controller.classList.remove('d-none')
    }

    function randomNumber(arr) {
        return Math.floor(Math.random() * arr.length);
    }

    function inputWords(n) {
        if (n > 0) {
            let tableContent = `<thead><tr class="table-light bg-light"><th scope="col"></th><th scope="col">Word</th><th scope="col">Meaning</th></tr></thead><tbody class="table-group-divider table-hover rounded">`;
            for (let i = 1; i <= n; i++) {
                tableContent += `<tr><th scope="row" class="text-center">${i}</th><td><input type="text" class="form-input word" placeholder="Enter word" required></td><td><input type="text" class="form-input meaning" placeholder="Enter meaning" required></td></tr>`;
            }
            tableContent += `</tbody>`;
            tableInputWords.innerHTML = tableContent;
        }
    }

    word_input.addEventListener('input', function() {
        Default();
    })

    function Default() {
        word_input.classList.remove('text-success', 'border-success');
        word_input.disabled = false;
        remove()
        check.disabled = false;
        iconCheck.innerHTML = '';
        answerCorrect.innerHTML = '';
        answerWrong.innerHTML = '';
        seeAnswer.hidden = true;
    }

    btnCreated.addEventListener('click', (e) => {
        e.preventDefault();
        data = storedArray;
        startTest();
    })

    btnCreate.addEventListener('click', (e) => {
        e.preventDefault();
        btnSettings.children[0].hidden = false;

        hiddenController();
        document.querySelector('#form-create-test').hidden = false;
    });

    document.querySelector('#btn-create').addEventListener('click', (e) => {
        e.preventDefault();
        if (inputNumberWord.value > 0) {
            document.querySelector('#form-input-words').hidden = false;
            inputWords(inputNumberWord.value);
            document.querySelector('#create-test').hidden = false;
        }
    });

    document.querySelector('#create-test').addEventListener('click', function(e) {
        e.preventDefault();
        data = Array.from(document.querySelectorAll('.word')).map((input, index) => [
            input.value, document.querySelectorAll('.meaning')[index].value
        ]).filter(([word, meaning]) => word && meaning);
        localStorage.removeItem('data');
        localStorage.setItem('data', JSON.stringify(data));
        storedArray = JSON.parse(localStorage.getItem('data'));
        console.log(storedArray);
        startTest();
    });

    btnTestSentences.addEventListener('click', function(e) {
        data = Array.from(sentencesArr);
        startTest();
    })

    btnStart.addEventListener('click', function() {
        data = getData(vocabulariesArr);
        startTest();
    });

    btnStart.addEventListener('click', startTest);
    btnRetart.addEventListener('click', startTest);

    btnBack.addEventListener('click', () => {
        btnSettings.children[0].hidden = true;
        document.querySelector('.exam').hidden = true;
        presentlyController();
        Default();
    });

    btnBackCreate.addEventListener('click', () => {
        btnSettings.children[0].hidden = true;
        document.querySelector('.exam').hidden = true;
        document.querySelector('#form-create-test').hidden = true;
        document.querySelector('#form-input-words').hidden = true;
        presentlyController();
        Default();
    });

    function startTest() {
        hiddenController();
        vocabularies = Array.from(data);
        number = randomNumber(vocabularies);
        document.querySelector('#form-create-test').hidden = true;
        document.querySelector('#create-test').hidden = true;
        tableInputWords.innerHTML = '';
        btnRetart.hidden = false;
        document.querySelector('.exam').hidden = false;
        showVocabulary(vocabularies[number]);
        btnSettings.children[0].hidden = false;
        cntScore = 0;
        score.innerHTML = cntScore;
    }

    function showVocabulary([wordText, meaningText]) {
        meaning.innerHTML = meaningText; // Hiển thị nghĩa của từ
        word_input.value = ''; // Reset lại input
        word_input.focus(); // Đưa con trỏ vào input
        Default();
    }

    check.addEventListener('click', function(e) {
        e.preventDefault(); // Ngăn chặn trang bị reload khi nhấn nút check
        checkAnswer();
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Ngăn chặn reload khi nhấn Enter
            if (check.disabled == false) {
                checkAnswer();
            }
        }
        if (event.key === 'Tab') {
            event.preventDefault(); // Nếu muốn chặn hành động mặc định của phím 
            // Hiển thị thông báo khi phím Tab được nhấn
            nextVocabulary()
        }
        if (event.key === 'Ctrl' || event.keyCode === 17) {
            event.preventDefault(); // Nếu muốn chặn hành động mặc định của phím 
            if (seeAnswer.hidden == false) {
                viewAnswer(correct, wrong)
            }
        }
        if (event.key === ';') {
            event.preventDefault(); // Nếu muốn chặn hành động mặc định của phím 
            // Hiển thị thông báo khi phím Tab được nhấn
            if(word_input.disabled === true){
            speakAnswer(vocabularies[number][0].trim())
            }
        }
    });

    var correct = '',
        wrong = '';

    function checkAnswer() {
        if (word_input.value.trim().toLowerCase() !== '') {
            if (removeChars(expandAbbreviations(word_input.value.toLowerCase())).trim() === removeChars(expandAbbreviations(vocabularies[number][0].toLowerCase())).trim()) {
                iconCheck.innerHTML = `<i class="fa-solid fa-circle-check text-success fs-2"></i>`;
                score.innerHTML = ++cntScore;
                word_input.classList.add('text-success', 'border-success');
                word_input.disabled = true;
                word_input.value = vocabularies[number][0].trim();
                iconCheck.innerHTML += `<i onclick="speakAnswer(vocabularies[number][0].trim())" class="cs-hover fa-solid fa-volume-high text-success fs-3 ms-2"></i>`;
                result('success');
            } else {
                wordLength = vocabularies[number][0].trim().toLowerCase().length
                wordInputLength = word_input.value.trim().toLowerCase().length
                correct = '', wrong = '';
                for (var i = 0; i < wordLength; i++) {
                    if (word_input.value.trim().toLowerCase()[i] !== vocabularies[number][0].trim().toLowerCase()[i]) {
                        for (var j = 0; j < (wordLength - i); j++) {
                            wrong += '*';
                        }
                        break;
                    } else {
                        correct += vocabularies[number][0].trim().toLowerCase()[i]
                    }
                }
                correctLength = correct.length
                wrong = wrong.slice(0, -1)
                if (wordLength > correctLength) {
                    correct += vocabularies[number][0].trim()[correctLength]
                }
                answerCorrect.innerHTML = correct
                answerWrong.innerHTML = wrong
                seeAnswer.hidden = false;
                seeAnswer.innerHTML = '<i class="fa-solid fa-eye-slash cs-hover p-2 btn-hidden-answer"></i>';
                iconCheck.innerHTML = '<i class="fa-solid fa-triangle-exclamation text-warning fs-3"></i><span class="ms-1 fs-3 text-warning">Wrong answer</span>';
                setCaretPosition(correctLength)
            }
            check.disabled = true;
        }
    }

    function setCaretPosition(idx) {
        word_input.setSelectionRange(++idx, idx);
        word_input.focus();
    }
    
    // const speechSynthesis = document.querySelectorAll('.fa-volume-high')
    
    function speakAnswer(text) {
    if ('speechSynthesis' in window) {
    const utterance = new SpeechSynthesisUtterance(text);
        window.speechSynthesis.speak(utterance);
    } else {
    speechSynthesis.forEach(function(item, index) {
        item.classList.remove('fa-volume-high');
    });
    alert('Thiết bị của bạn không hỗ trợ!');
}

        
        
    }

    function viewAnswer(correct, wrong) {
        if (seeAnswer.innerHTML != '') {
            if (seeAnswer.innerHTML == '<i class="fa-solid fa-eye-slash cs-hover p-2 btn-hidden-answer"></i>') {
                seeAnswer.innerHTML = '<i class="fa-solid fa-eye p-2 cs-hover btn-see-answer"></i>'
                answerCorrect.innerHTML = vocabularies[number][0];
                answerCorrect.innerHTML += `<i onclick="speakAnswer(vocabularies[number][0].trim())" class="cs-hover fa-solid fa-volume-high text-success ms-2"></i>`;

                answerWrong.innerHTML = ''
            } else {
                seeAnswer.innerHTML = '<i class="fa-solid fa-eye-slash cs-hover p-2 btn-hidden-answer"></i>'
                answerCorrect.innerHTML = correct
                answerWrong.innerHTML = wrong
            }
        }
    }

    btnNext.addEventListener('click', nextVocabulary);

    function nextVocabulary() {
        vocabularies.splice(number, 1);
        if (vocabularies.length) {
            number = randomNumber(vocabularies);
            showVocabulary(vocabularies[number]);
        } else {
            iconCheck.innerHTML = '<i class="fa-solid fa-triangle-exclamation text-warning fs-3"></i><span class="ms-1 fs-3 text-warning">No more vocabularies!</span>';
        }
        word_input.focus()
    }

    vocabulariesArr = [];
    <?php foreach ($getWordsTopics as $items) : ?>
        var newRow = ["<?php echo $items['word']; ?>", "<?php echo $items['meaning']; ?>", "<?php echo $items['part_of_speech_name']; ?>", "<?php echo $items['transcription']; ?>", "<?php echo $items['example_sentence']; ?>", "<?php echo $items['acronym']; ?>"];
        vocabulariesArr.push(newRow);
    <?php endforeach; ?>

    sentencesArr = [];
    <?php foreach ($getSentences as $items) : ?>
        var newRow = ["<?php echo $items['sentence']; ?>", "<?php echo $items['meaning']; ?>"];
        sentencesArr.push(newRow);
    <?php endforeach; ?>

    function getData(arr) {
        let vocabularies = Array.from(arr);
        return vocabularies;
    }

    function result(result) {
        check.classList.remove('btn-light')
        check.classList.add('btn-' + result + '')
        btnNext.classList.remove('btn-outline-light')
        btnNext.classList.add('btn-outline-' + result + '')
        speakAnswer(vocabularies[number][0].trim())
    }

    function remove() {
        check.classList.remove('btn-success')
        btnNext.classList.remove('btn-outline-success')
        check.classList.add('btn-light')
        btnNext.classList.add('btn-outline-light')
    }

    function removeChars(text) {
        // Loại bỏ các ký tự /, ! và khoảng trắng thừa
        return text.replace(/[\/!?@#$%^&*()~`,.]/g, '').replace(/\s+/g, ' ').trim();
    }

    function expandAbbreviations(text) {
        // Đối tượng chứa các từ viết tắt và từ đầy đủ
        const abbreviations = {
            // "I'm": "I am",
            // "you're": "you are",
            // "he's": "he is",
            // "she's": "she is",
            // "we're": "we are",
            // "they're": "they are",
            // "isn't": "is not",
            // "aren't": "are not",
            // "can't": "cannot",
            // "won't": "will not",
            // "don't": "do not",
            // "doesn't": "does not",
            // "it's": "it is",
            // "I've": "I have",
            // "you've": "you have",
            // "we've": "we have",
            // "they've": "they have",
            // "I'll": "I will",
            // "you'll": "you will",
            // "he'll": "he will",
            // "she'll": "she will",
            // "we'll": "we will",
            // "they'll": "they will",
            // "I'd": "I would",
            // "you'd": "you would",
            // "he'd": "he would",
            // "she'd": "she would",
            // "we'd": "we would",
            // "they'd": "they would",
            // "there's": "there is",
            // "here's": "here is",
            // "What's": "what is",
            // "who's": "who is",
            // "that's": "that is",
            // "where's": "where is",
            // "let's": "let us",
            // "shouldn't": "should not",
            // "wouldn't": "would not",
            // "couldn't": "could not",
            // "haven't": "have not",
            // "hasn't": "has not",
            // "hadn't": "had not",
            // "mustn't": "must not",
            // "didn't": "did not"
            "I am": "I'm",
            "you are": "you're",
            "he is": "he's",
            "she is": "she's",
            "we are": "we're",
            "they are": "they're",
            "is not": "isn't",
            "are not": "aren't",
            "cannot": "can't",
            "will not": "won't",
            "do not": "don't",
            "does not": "doesn't",
            "it is": "it's",
            "I have": "I've",
            "you have": "you've",
            "we have": "we've",
            "they have": "they've",
            "I will": "I'll",
            "you will": "you'll",
            "he will": "he'll",
            "she will": "she'll",
            "we will": "we'll",
            "they will": "they'll",
            "I would": "I'd",
            "you would": "you'd",
            "he would": "he'd",
            "she would": "she'd",
            "we would": "we'd",
            "they would": "they'd",
            "there is": "there's",
            "here is": "here's",
            "what is": "What's",
            "who is": "who's",
            "that is": "that's",
            "where is": "where's",
            "let us": "let's",
            "should not": "shouldn't",
            "would not": "wouldn't",
            "could not": "couldn't",
            "have not": "haven't",
            "has not": "hasn't",
            "had not": "hadn't",
            "must not": "mustn't",
            "did not": "didn't",
            "it was": "it's",
            "there was": "there's",
            "here was": "here's",
            "what was": "What's",
            "who was": "who's",
            "that was": "that's",
            "where was": "where's",
            "it was": "it's",
            "he was": "he's",
            "she was": "she's"
        };

        // Duyệt qua từng từ viết tắt và thay thế trong văn bản
        for (const abbr in abbreviations) {
            const fullWord = abbreviations[abbr];
            const regex = new RegExp(`\\b${abbr}\\b`, 'gi'); // Tạo regex để tìm từ viết tắt
            text = text.replace(regex, fullWord);
        }

        return text.toLowerCase();
    }
</script>