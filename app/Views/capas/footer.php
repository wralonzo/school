</div>
<footer class="block py-4">
    <div class="container mx-auto px-4">
        <hr class="mb-4 border-b-1 border-blueGray-200" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4">
                <div class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left">
                    Copyright © <span id="get-current-year"></span>
                    <a href="https://www.creative-tim.com?ref=njs-dashboard"
                        class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                        Clinica 2024
                    </a>
                </div>
            </div>
            <!-- <div class="w-full md:w-8/12 px-4">
                <ul class="flex flex-wrap list-none md:justify-end justify-center">
                    <li>
                        <a href="https://www.creative-tim.com?ref=njs-dashboard"
                            class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/presentation?ref=njs-dashboard"
                            class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com?ref=njs-dashboard"
                            class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-dashboard"
                            class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                            MIT License
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</footer>
</div>
</div>
<script>
function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("bg-white");
    document.getElementById(collapseID).classList.toggle("m-2");
    document.getElementById(collapseID).classList.toggle("py-3");
    document.getElementById(collapseID).classList.toggle("px-6");
  }

  function toggleNavbarAMnueg(collapseID) {
    document.getElementById(collapseID).classList.toggle("md:hidden");
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("bg-white");
    document.getElementById(collapseID).classList.toggle("m-1");
    document.getElementById(collapseID).classList.toggle("py-1");
    document.getElementById(collapseID).classList.toggle("px-1");

    document.getElementById('amburguerMain').classList.remove("md:ml-64");
    document.getElementById('btnOpen').classList.remove("hidden");
  }

  function toggleNavbarAMnuegOpen(collapseID) {
    document.getElementById(collapseID).classList.remove("md:hidden");
    document.getElementById(collapseID).classList.remove("hidden");
    document.getElementById(collapseID).classList.remove("bg-white");
    document.getElementById(collapseID).classList.remove("m-1");
    document.getElementById(collapseID).classList.remove("py-1");
    document.getElementById(collapseID).classList.remove("px-1");

    document.getElementById('amburguerMain').classList.add("md:ml-64");
    document.getElementById('btnOpen').classList.remove("hidden");
  }
  /* Function for dropdowns */
  function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
      element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
      placement: "bottom-start"
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
  }
</script>
<script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>
</body>

</html>