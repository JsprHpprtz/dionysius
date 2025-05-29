<x-guest-layout>

<style>
  .tabs-box {
    position: relative;
    width: 100%;
  }
  
  .tab-content {
    min-height: 400px;
    transition: all 0.3s ease;
    animation: fadeIn 0.3s ease forwards;
  }
  
  .tabs {
    position: sticky;
    top: 0;
    z-index: 10;
    background: white;
  }
  
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  /* Ensure the container has consistent height */
  .tabs-container {
    position: relative;
  }
</style>

<div role="alert" class="info-box alert alert-info">
  <?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 122.88 122.88" enable-background="new 0 0 122.88 122.88" xml:space="preserve"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M61.44,0c33.926,0,61.44,27.514,61.44,61.44c0,33.926-27.514,61.439-61.44,61.439 C27.513,122.88,0,95.366,0,61.44C0,27.514,27.513,0,61.44,0L61.44,0z M79.42,98.215H43.46v-6.053h6.757v-36.96H43.46v-4.816h16.808 c4.245,0,8.422-0.51,12.549-1.551v43.328h6.604V98.215L79.42,98.215z M63.859,21.078c2.785,0,4.975,0.805,6.571,2.396 c1.579,1.59,2.377,3.771,2.377,6.581c0,2.848-1.358,5.381-4.093,7.601c-2.751,2.22-5.941,3.338-9.577,3.338 c-2.733,0-4.905-0.765-6.569-2.297c-1.665-1.551-2.497-3.556-2.497-6.05c0-3.143,1.358-5.853,4.059-8.152 C56.83,22.219,60.072,21.078,63.859,21.078L63.859,21.078z"/></g></svg>
  <span>Let op: In de reguliere schoolvakanties zijn er geen trainingen.</span>
</div>
<br>
<div class="tabs-container">
  <div class="tabs tabs-box">
    <input type="radio" name="my_tabs_6" class="tab" aria-label="Maandag" checked="checked"/>
    <div class="tab-content bg-base-100 border-base-300 p-6">
      <p>18.00-19.00</p>
      <p>5-10 jaar</p>
      <p>Lambert de Wijsstraat 15</p>
      <p>Linne</p>
      <br>
      <p>19.00-20.00</p>
      <p>vanaf 10 jaar</p>
      <p>Lambert de Wijsstraat 15</p>
      <p>Linne</p>
      <br>
      <p>18.15-20.15</p>
      <p>WPD div. 3-4-5 (alleen na doorverwijzing)</p>
      <p>Staringstraat 14</p>
      <p>Eileen & Marco</p>
      <br>
      <p>20.30-21.30</p>
      <p>sportfit (heren)</p>
      <p>Karel Boddenweg 2</p>
    </div>

    <input type="radio" name="my_tabs_6" class="tab" aria-label="Dinsdag" />
    <div class="tab-content bg-base-100 border-base-300 p-6">
      <p>18.00-19.00</p>
      <p>5 tot 9 jaar</p>
      <p>Lambert de Wijsstraat 15</p>
      <p>Hannah</p>
      
      <br>
      
      <p>19.00-20.00</p>
      <p>vanaf 10 jaar</p>
      <p>Lambert de Wijsstraat 15</p>
      <p>Hannah</p>
      
      <br>
      
      <p>18.00-20.00</p>
      <p>WPD div. 5-6 (alleen na doorverwijzing)</p>
      <p>Staringstraat 14</p>
      <p>Ashley & Norah</p>
      
      <br>
      
      <p>20.00-21.00</p>
      <p>damesfit</p>
      <p>Beneluxlaan 2</p>
      <p>Annie</p>
    </div>

    <input type="radio" name="my_tabs_6" class="tab" aria-label="Woensdag" />
    <div class="tab-content bg-base-100 border-base-300 p-6">
      <p>14.15-15.15</p>
      <p>55+ dames- en herenfit</p>
      <p>Beneluxlaan 2</p>
      <p>Annie</p>
      
      <br>
      
      <p>17.30-18.30</p>
      <p>5-9 jaar</p>
      <p>Staringstraat 14</p>
      <p>Eef</p>
      
      <br>
      
      <p>18.30-19.30</p>
      <p>vanaf 10 jaar</p>
      <p>Staringstraat 14</p>
      <p>Eef</p>
    </div>

    <input type="radio" name="my_tabs_6" class="tab" aria-label="Donderdag" />
    <div class="tab-content bg-base-100 border-base-300 p-6">
      <p>18.00-21.00</p>
      <p>WPD div 3-4 (alleen na doorverwijzing)</p>
      <p>Karel Boddenweg 2</p>
      <p>Eileen & Marco</p>
    </div>

    <input type="radio" name="my_tabs_6" class="tab" aria-label="Zaterdag" />
    <div class="tab-content bg-base-100 border-base-300 p-6">
      <p>10.00-11.00</p>
      <p>6 tot 10 jaar</p>
      <p>Karel Boddenweg 2</p>
      <p>Sofie</p>
      
      <br>
      
      <p>11.15-12.15</p>
      <p>Jongens (alle leeftijden)</p>
      <p>Karel Boddenweg 2</p>
      <p>Sofie</p>
      
      <br>
      
      <p>09.30-10.15</p>
      <p>kleuters (3 tot 5 jaar)</p>
      <p>Bergeijkstraat 18 – rechterzijde zaal</p>
      <p>Ellen</p>
      
      <br>
      
      <p>10.30-11.30</p>
      <p>6, 7 en 8 jaar</p>
      <p>Bergeijkstraat 18 – rechterzijde zaal</p>
      <p>Judith</p>
      
      <br>
      
      <p>11.30-12.30</p>
      <p>10-15 jaar</p>
      <p>Bergeijkstraat 18 – rechterzijde zaal</p>
      <p>Judith</p>
      
      <br>
      
      <p>09.30-10.30</p>
      <p>6 en 7 jaar</p>
      <p>Bergeijkstraat 18 – linkerzijde zaal</p>
      <p>Ashley en Nanne</p>
      
      <br>
      
      <p>10.30-11.30</p>
      <p>8 en 9 jaar</p>
      <p>Bergeijkstraat 18 – linkerzijde zaal</p>
      <p>Ashley en Nanne</p>
      
      <br>
      
      <p>11.30-12.30</p>
      <p>10 tot 15 jaar</p>
      <p>Bergeijkstraat 18 – linkerzijde zaal</p>
      <p>Ashley en Nanne</p>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabInputs = document.querySelectorAll('.tabs input[type="radio"]');
    const tabContents = document.querySelectorAll('.tab-content');
    
    // Get the tallest content height
    let maxHeight = 0;
    tabContents.forEach(content => {
      const height = content.scrollHeight;
      if (height > maxHeight) {
        maxHeight = height;
      }
    });
    
    // Set min-height to all content areas
    tabContents.forEach(content => {
      content.style.minHeight = maxHeight + 'px';
    });
    
    tabContents.forEach((content, index) => {
      if (!tabInputs[index].checked) {
        
        content.style.display = 'none';
      }
    });
    
    
    tabInputs.forEach((input, index) => {
      input.addEventListener('change', () => {
        if (input.checked) {
          
          const activeContent = tabContents[index];
          
          tabContents.forEach((content, i) => {
            if (i !== index) {
              content.style.display = 'none';
            }
          });
          
          activeContent.style.display = 'block';
          activeContent.style.opacity = '1';
          activeContent.style.height = 'auto';

          const scheduleItems = activeContent.querySelectorAll('p');
          gsap.fromTo(scheduleItems, 
            { opacity: 0, y: 10 },
            { 
              opacity: 1, 
              y: 0, 
              stagger: 0.03, 
              duration: 0.1, 
              ease: "power2.out",
              clearProps: "all"
            }
          );
        }
      });
    });
    
    const initialActiveTabIndex = [...tabInputs].findIndex(input => input.checked);
    if (initialActiveTabIndex !== -1) {
      const initialActiveContent = tabContents[initialActiveTabIndex];
      const initialScheduleItems = initialActiveContent.querySelectorAll('p');
      
      gsap.fromTo(initialScheduleItems, 
        { opacity: 0, y: 10 },
        { 
          opacity: 1, 
          y: 0, 
          stagger: 0.03, 
          duration: 0.1, 
          ease: "power2.out",
          clearProps: "all"
        }
      );
    }
  });

  const info = document.querySelector('.info-box');
    if (info) {
        gsap.from(info, {
        opacity: 0,
        x: -40,
        duration: 0.3,
        ease: "power2.out",
        delay: 0.5
        });
    }
</script>
</x-guest-layout>