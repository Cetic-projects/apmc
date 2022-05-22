$('#CheckAll').on('click', function(){
    $('.checkBoxClass').prop('checked', $(this).prop('checked'));
});

window.addEventListener('load', function load() {
    const loader = document.getElementById('loader');
    setTimeout(function() {
      loader.classList.add('fadeOut');
    }, 300);
  });


