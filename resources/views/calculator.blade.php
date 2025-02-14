<x-layout>
    <div class="bg-black p-6 w-80 box-border justify-center rounded-lg m-auto shadow">
        <div class="mb-5 pl-1">
            <p class="w-full text-3xl text-end bg-transparent font-sans text-white border-none break-normal"
                name="user-input" id="userinput">0</p>
        </div>
        <div class="grid grid-cols-4 gap-y-3.5 gap-x-2.5">


            <x-calculator.calc-button class="operations bg-[#6B7280]">AC</x-calculator.calc-button>
            <x-calculator.calc-button class="operations bg-[#6B7280]">DEL</x-calculator.calc-button>
            <x-calculator.calc-button class="operations bg-[#6B7280]">%</x-calculator.calc-button>
            <x-calculator.calc-button class="operations bg-orange-500">/</x-calculator.calc-button>
            <x-calculator.calc-button class="numbers">7</x-calculator.calc-button>
            <x-calculator.calc-button class="numbers">8</x-calculator.calc-button>
            <x-calculator.calc-button class="numbers">9</x-calculator.calc-button>
            <x-calculator.calc-button class="operations bg-orange-500">*</x-calculator.calc-button>
            <x-calculator.calc-button class="numbers">4</x-calculator.calc-button>
            <x-calculator.calc-button class="numbers">5</x-calculator.calc-button>
            <x-calculator.calc-button class="numbers">6</x-calculator.calc-button>
            <x-calculator.calc-button class="operations bg-orange-500">-</x-calculator.calc-button>
            <x-calculator.calc-button class="numbers">1</x-calculator.calc-button>
            <x-calculator.calc-button class="numbers">2</x-calculator.calc-button>
            <x-calculator.calc-button class="numbers">3</x-calculator.calc-button>
            <x-calculator.calc-button class="operations bg-orange-500">+</x-calculator.calc-button>
            <x-calculator.calc-button class="operations w-full col-span-2 rounded-[30%]">0</x-calculator.calc-button>
            <x-calculator.calc-button>.</x-calculator.calc-button>
            <x-calculator.calc-button class="operations bg-orange-500">=</x-calculator.calc-button>

        </div>
    </div>
    <script>
        const inputValue = document.getElementById('userinput');
        const calculate = document.querySelectorAll('.operations').forEach(function(item) 
        {
            console.log(item);
            item.addEventListener("click", function(e) 
            {
                let lastValue = inputValue.innerText.substring(
                    inputValue.innerText.length,
                    inputValue.innerText.length - 1
            )
                if (!isNaN(lastValue) && e.target.innerText === '=') {
                    inputValue.innerText = eval(inputValue.innerText);
                } else if (e.target.innerText === 'AC') {
                    inputValue.innerText = '0';
                } else if (e.target.innerText === 'DEL') {
                    inputValue.innerText = inputValue.innerText.substring(0,
                        inputValue.innerText.length - 1);

                    if (inputValue.innerText.length == 0){
                        inputValue.innerText = '0';
                };
                        
                } else {
                    if(!isNaN(lastValue))
                    {
                        inputValue.innerText += e.target.innerText;
                    }
            }})
        })

        const number = document.querySelectorAll(".numbers").forEach(function(item) {
            item.addEventListener("click", function(e) {
                console.log(e.target.innerText);
                if (inputValue.innerText === '0') {
                    inputValue.innerText = '';
                }
                inputValue.innerText += e.target.innerText.trim();
            })
        });
    </script>
</x-layout>
