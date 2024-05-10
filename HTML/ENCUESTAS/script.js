document.addEventListener('DOMContentLoaded', function slides()
{
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    let votoPst = 0;
    let votoNgv = 0;

    function showSlide(index)
    {
        slides.forEach((slide) => {
            slide.style.display = 'none';
        });

        slides[index].style.display = 'block';
    }

    function nextSlide()
    {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function Pst_Ngt(event)
    {
        if (event.target.id = 'positiveBtn'){
            votoPst = 1;
            votoNgv = 0;
        } else if (event.target.id = 'negativeBtn'){
            votoPst = 0;
            votoNgv = 1;
        }

        $.ajax({
            URL: "index.php",
            method: "POST",
            data: {votoNgv, votoPst},
            success: function(data){
                console.log(data);
            }
        })
    }

    showSlide(currentSlide);

    document.getElementById('positiveBtn').addEventListener('click', nextSlide, Pst_Ngt);
    document.getElementById('negativeBtn').addEventListener('click', nextSlide, Pst_Ngt);
});

$("i").click(function () {
    $("ul").toggleClass("open");
});