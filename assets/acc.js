// JavaScript for Accordion
document.addEventListener('DOMContentLoaded', function() {
    var accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(function(item) {
        var button = item.querySelector('.accordion-button');

        button.addEventListener('click', function() {
            var content = item.querySelector('.accordion-content');
            item.classList.toggle('active');

            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
        });
    });
});

function toggleAccordion(button) {
    var icon = button.querySelector('i.fa');
    if (icon.classList.contains('fa-plus')) {
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-minus');
    } else {
        icon.classList.remove('fa-minus');
        icon.classList.add('fa-plus');
    }
}


