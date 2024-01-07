            function setActive() {
                    var currentURL = window.location.href;
                    var links = document.querySelectorAll('.list-group-item');
                    console.log(currentURL);
                    links.forEach(function(link) {
                        if (link.href === currentURL) {
                            link.classList.add('active');
                        } else {
                            link.classList.remove('active');
                        }
                    });
                }
            window.addEventListener('DOMContentLoaded', setActive);
