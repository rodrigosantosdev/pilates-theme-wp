<section class="flex justify-between items-center w-full bg-black-950 border-b-[1px] border-black-900/90 bg-left bg-cover bg-agendar" id="agendar">

  <div class="container">

    <form class="md:w-2/4 lg:w-2/6 text-slate-50 bg-slate-950 z-10 p-4 border-r-[1px] border-l-[1px] border-black-900/90">

      <div class="flex flex-col items-center justify-center ">
        <h1 class="max-w-xs mb-4 text-5xl font-bold text-center" id="title">Primeiro mês Somente</h1>
        <span class="flex items-center justify-center text-4xl font-semibold text-lime-500" id="price">R$ 100</span>
      </div>

      <label class="block mb-1 font-light" for="fname">Nome</label>
      <input class="w-full p-2 px-2 rounded text-slate-950" type="text" name="fname" id="fname" required placeholder="digite seu nome" />

      <label class="block mt-4 mb-1 font-light" for="fmail">Email</label>
      <input class="w-full p-2 px-2 rounded text-slate-950" type="email" name="fmail" id="fmail" required placeholder="email@email.com" />

      <label class="block mt-4 mb-1 font-light" for="fmessage">Sua Mensagem</label>
      <textarea class="w-full px-2 pt-2 rounded text-slate-950" name="fmessage" id="fmessage" required rows="5" placeholder="digite sua mensagem"></textarea>

      <button id="send" class="p-3 mt-4 mb-4 font-bold rounded-md bg-lime-400 text-slate-900 hover:bg-lime-500">
        Enviar Mensagem
      </button>

    </form>
  </div>

</section>