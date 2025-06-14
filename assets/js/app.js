const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});

const animateElements = document.querySelectorAll('.animate');
hiddenElements.forEach((el) => observer.observe(el));