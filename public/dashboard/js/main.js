
//Start The Equal sections Height
$('input[type=date]').bootstrapMaterialDatePicker
    ({
        time: false,
        clearButton: true,
        //minDate : new Date()
    });

var inputs = document.querySelectorAll('.file-input')

for (var i = 0, len = inputs.length; i < len; i++) {
    customInput(inputs[i])
}

function customInput(el) {
    const fileInput = el.querySelector('[type="file"]')
    const label = el.querySelector('[data-js-label]')

    fileInput.onchange =
        fileInput.onmouseout = function () {
            if (!fileInput.value) return

            var value = fileInput.value.replace(/^.*[\\\/]/, '')
            el.className += ' -chosen'
            label.innerText = value
        }
}
(function () {
    equalHeight(false);
})();

window.onresize = function () {
    equalHeight(true);
}

function equalHeight(resize) {
    var elements = document.getElementsByClassName("equalHeight"),
        allHeights = [],
        i = 0;
    if (resize === true) {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.height = 'auto';
        }
    }
    for (i = 0; i < elements.length; i++) {
        var elementHeight = elements[i].clientHeight;
        allHeights.push(elementHeight);
    }
    for (i = 0; i < elements.length; i++) {
        elements[i].style.height = Math.max.apply(Math, allHeights) + 'px';
        if (resize === false) {
            elements[i].className = elements[i].className + " show";
        }
    }
}

//End The Equal sections Height


//Start The Equal sections Height

(function () {
    equalHeight(false);
})();

window.onresize = function () {
    equalHeight(true);
}

function equalHeight(resize) {
    var elements = document.getElementsByClassName("sameHeight2"),
        allHeights = [],
        i = 0;
    if (resize === true) {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.height = 'auto';
        }
    }
    for (i = 0; i < elements.length; i++) {
        var elementHeight = elements[i].clientHeight;
        allHeights.push(elementHeight);
    }
    for (i = 0; i < elements.length; i++) {
        elements[i].style.height = Math.max.apply(Math, allHeights) + 'px';
        if (resize === false) {
            elements[i].className = elements[i].className + " show";
        }
    }
}

//End The Equal sections Height
