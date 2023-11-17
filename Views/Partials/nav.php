<nav>
  <ul class="p-0 m-0 flex bg-orange-700 flex-row flex-wrap">
    <li class="grow p-0 w-1/5 border border-black border-solid box-border">
      <a href="/phpapp/" class="leading-[3] min-h-[45px] block text-slate-50 text-center" <?= urlIs('/phpapp/') ? 'aria-current="page"': '' ?>>Home</a>
    </li>
    <li class="grow p-0 w-1/5 border border-black border-solid box-border">
      <a href="/phpapp/about" class="leading-[3] min-h-[45px] block text-slate-50 text-center" <?= urlIs('/phpapp/about') ? 'aria-current="page"': '' ?>>About</a>
    </li>
    <li class="grow p-0 w-1/5 border border-black border-solid box-border">
      <a href="/phpapp/contact" class="leading-[3] min-h-[45px] block text-slate-50 text-center" <?= urlIs('/phpapp/contact') ? 'aria-current="page"': '' ?>>Contact</a>
    </li>
  </ul>
</nav>
