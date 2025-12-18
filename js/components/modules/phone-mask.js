
const formsTel = document.querySelectorAll('.wpcf7 form [type="tel"]');

formsTel.forEach(input => {
    input.addEventListener('input', () => {
        const rawValue = input.value;
        let digits = getCleanDigits(rawValue);

        if (digits.length === 0) {
            input.value = '';
            return;
        }
	
        const formatted = formatPhone(digits);
        input.value = formatted;
        setCursorPosition(input, formatted.length);
    });
});

const maxDigits = 12;

function getCleanDigits(str) {
    let cleaned = str.replace(/[^\d+]/g, '');
    if (cleaned.startsWith('+')) {
        return '+' + cleaned.slice(1).replace(/\D/g, '');
    }
    return cleaned.replace(/\D/g, '');
}

function normalizePhone(digits) {

    if (digits.startsWith('8')) {
        if (digits.length === 1) {
            digits = '38';
        } else {
            const second = digits[1];
            if (second === '0') {
                digits = '380' + digits.slice(2); 
            } else {
                digits = '380' + '0' + digits.slice(1);
            }
        }
    } else if (digits.startsWith('0')) {
        digits = '380' + digits.slice(1);
    } else if (digits.startsWith('3')) {
        if (digits.length === 1) {
            return digits;
        } else if (digits[1] !== '8' && digits[1] !== '0') {
            digits = '380' + digits.slice(1);
        } else if (digits[1] == '0' && digits[1] !== '8') {
            digits = '380';
        } else if (digits[2] !== '0' && digits[1] !== '8') {
            digits = '380' + digits.slice(2);
        } else if (digits.length === 3 && digits[2] !== '0') {
            digits = '380' + digits.slice(2);
        }
    } else {
        digits = '380' + digits;
    }
    
    return digits.substring(0, maxDigits);
}
    
    
function formatPhone(digits) {
    if (digits === '+') return '+';
    let val = normalizePhone(digits.replace(/\D/g, ''));
    let result = '+';
    if (val.length > 0) result += val.substring(0, 2);             // +38
    if (val.length >= 3) result += ' (' + val.substring(2, 5);     // +38 (0XX
    if (val.length >= 6) result += ') ' + val.substring(5, 8);     // +38 (0XX) XXX
    if (val.length >= 9) result += '-' + val.substring(8, 10);     // +38 (0XX) XXX-XX
    if (val.length >= 11) result += '-' + val.substring(10, 12);   // +38 (0XX) XXX-XX-XX

    return result;
}

function setCursorPosition(el, pos) {
    window.requestAnimationFrame(() => {
        el.setSelectionRange(pos, pos);
    });
}
