document.querySelector('.wpcf7-file').onchange = function() { 
    document.querySelector('.file-name').textContent = this.value.replace(/^.*[\\\/]/, '');
};