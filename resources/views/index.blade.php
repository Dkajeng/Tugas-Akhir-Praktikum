<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="dist/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;500;600;700&display=swap"
      rel="stylesheet"
    />
    @vite('resources/css/app.css')
    <title>Medical Remainder</title>
  </head>

  <body>
    <div
      class="w-full bg-cover"
      style="background-image: url('/img/image12.png')"
    >
      <div class="pt-10">
        <h1 class="text-center font-bold text-6xl text-white">
          How is your health today?
        </h1>
        <div>
          <div class="container mt-40 px-12 flex flex-row">
            <div class="w-[75%] mx-4">
              <h2 class="text-3xl text-[#7C5269] font-bold mb-4">
                Desember, 2022
              </h2>
              <div class="w-full flex">
                <div
                  class="w-[60px] h-[80px] mb-9 mt-2 bg-white px-4 py-3 mr-8 hover:bg-[#B991BF]"
                >
                  <span class="rounded-full bg-gray-300 p-1 font-bold">28</span>
                </div>

                <div
                  class="w-[60px] h-[80px] mb-9 mt-2 bg-white px-4 py-3 mr-8 hover:bg-[#B991BF]"
                >
                  <span class="rounded-full bg-gray-300 p-1 font-bold">29</span>
                </div>

                <div
                  class="w-[60px] h-[80px] mb-9 mt-2 bg-white px-4 py-3 mr-8 hover:bg-[#B991BF]"
                >
                  <span class="rounded-full bg-gray-300 p-1 font-bold">30</span>
                </div>

                <div
                  class="w-[60px] h-[80px] mb-9 mt-2 bg-white px-4 py-3 mr-8 hover:bg-[#B991BF]"
                >
                  <span class="rounded-full bg-gray-300 p-1 font-bold">31</span>
                </div>

                <div
                  class="w-[60px] h-[80px] mb-9 mt-2 bg-white px-4 py-3 mr-8 hover:bg-[#B991BF]"
                >
                  <span
                    class="rounded-full bg-gray-300 py-1 px-[10px] font-bold"
                    >1</span
                  >
                </div>

                <div
                  class="w-[60px] h-[80px] mb-9 mt-2 bg-white px-4 py-3 mr-8 hover:bg-[#B991BF]"
                >
                  <span class="rounded-full bg-gray-300 p-1 px-[10px] font-bold"
                    >2</span
                  >
                </div>

                <div
                  class="w-[60px] h-[80px] mb-9 mt-2 bg-white px-4 py-3 mr-8 hover:bg-[#B991BF]"
                >
                  <span class="rounded-full bg-gray-300 p-1 px-[10px] font-bold"
                    >3</span
                  >
                </div>
              </div>
            </div>

            <div class="w-fit flex justify-around">
              <div
                class="bg-white rounded-lg w-[165px] h-[148px] p-1 -translate-y-5 mx-8  hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:ring  focus:ring-blue-100"
              >
                <h1 class="text-center pt-4">Health check with dr.Abinaya</h1>
                <h2 class="text-center pt-4">9.00 - 10.00</h2>
              </div>

              <div
                class="bg-white rounded-lg w-[165px] h-[148px] p-1 -translate-y-5 hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:ring  focus:ring-blue-100"
              >
                <h1 class="text-center pt-4">Health check with dr.Dhika</h1>
                <h2 class="text-center pt-4">13.00 - 15.00</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-20">
        <div class="grid grid-cols-2 gap-3 place-items-center ml-10 mr-10 mx-4">
          <div class="bg-[#B991BF] w-[500px] h-[380px] p-2">
            <h1 class="text-3xl font-bold text-white pt-2 text-center">
              Your drug cabinet
            </h1>
            <form action="{{ route('add_note') }}" method="post">
                @csrf
                <textarea name="aturan_pemakaian"cols="50" rows="8" class="mt-5 mx-[45px] p-2"></textarea>
                
                <button type="submit" class="rounded-md bg-black mt-6 mx-32 py-4 hover:bg-[#272727] transition duration-300
                text-center text-white font-light text-lg w-[200px]">Chat Doctor</button>
            </form>
            
          </div>

          <div class="bg-[#B991BF] w-[500px] h-[380px] p-2">
            <h1 class="text-3xl font-bold text-white pt-2 text-center">
              Set Reminder
            </h1>
            <div class="bg-[#D4B9C8] w-[370px] h-[240] mt-5 mx-auto">
              <form class="py-5 px-14" action="{{ route('store_remainder') }}" method="post">
                @csrf
                <label for="pills" class="text-white text-lg font-medium"
                  >Pills name</label
                >
                <br />
                <input
                  type="text"
                  name="nama_obat"
                  id="pills"
                  class="py-2 px-4 w-[250px]"
                />
                <br />
                <label for="amount" class="text-white text-lg font-medium"
                  >Amount</label
                >
                <br />
                <input
                  type="number"
                  name="amount"
                  id="amount"
                  class="py-2 px-4 w-[250px]"
                />
                <div class="flex mt-6 pb-6 w-full">
                    <div>
                        <input type="time" name="kalender" class="rounded-lg py-2 px-2 cursor-pointer">
                    </div>
                    <button type="submit" class="rounded-md bg-black mx-2 px-[44px] hover:bg-[#272727] transition duration-300
                     text-white font-light text-lg ">Add Pills</button>
                </div>

              </form>

              {{-- <div class="flex mt-4 pb-10">
                <div class="mx-12">
                  <div class="rounded-lg bg-white p-2 ml-2">
                    <img src="/img/clockk.svg" alt="">
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
