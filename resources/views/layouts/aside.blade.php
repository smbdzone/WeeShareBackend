<aside>
    <h3 class="text-blue">{{ Auth::user()->company ?? Auth::user()->name }}</h3>


    <ul class="list-unstyled  sidebar">
        <li class="d-list"><a href="/dashboard"> <i class="fa-solid fa-calendar-days"></i> Calendar </a></li>
        <li class="d-list"><a href="/media"> <i class="fa-regular fa-images"></i> Media </a></li>
        <li class="d-list"><a href=""> <i class="fa-solid fa-chart-line"></i> Analytics </a></li>
        <li class="d-list"><a href="#collapseExample" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="collapseExample"><i class="fa-regular fa-clipboard"></i> Survey </a>
          <ul class="collapse" id="collapseExample">
            <li class="drop-down-list"> <a href="">Active Survey</a></li>
            <li class="drop-down-list"> <a href="">Archived Survey</a></li>
          </ul>
        </li>

      </ul>

      <div class="bottom-link">
        <ul class="list-unstyled  sidebar">
          <li class="d-list"><a href="/"> <i class="fa-solid fa-house"></i> Home </a></li>
          <li class="d-list"><a href=""> <i class="fa-solid fa-gear"></i> Setting </a></li>
          <li class="d-list"><a href=""> <i class="fa-regular fa-circle-question"></i> Support or Chat </a></li>
          <li class="d-list"><a href=""> <i class="fa-regular fa-circle-question"></i> FAQ </a></li>
          <li class="d-list"><a href=""> <i class="fa-solid fa-power-off"></i> Logout </a></li>
        </ul>
      </div>
</aside>