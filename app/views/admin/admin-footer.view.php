</div>

</main>
</div>
</div>

<script type="text/javascript">
    let links = document.querySelectorAll(".nav a");

    for (var i=0; i< links.length; i++) {

        if(window.location.href == links[i].href)
        {
            links[i].classList.add("active");
        }
    }
</script>
</body>
</html>