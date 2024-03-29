<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><style>
	.popover-header { color:#333; background-color:#f7f7f7; border-bottom: 1px solid #ebebeb; }

      #tooltip {
        background: #333;
        color: white;
        font-weight: bold;
        padding: 4px 8px;
        font-size: 13px;
        border-radius: 4px;
        display: none;
      }

      #tooltip[data-show] {
        display: block;
      }

      #arrow,
      #arrow::before {
        position: absolute;
        width: 8px;
        height: 8px;
        background: inherit;
      }

      #arrow {
        visibility: hidden;
      }

      #arrow::before {
        visibility: visible;
        content: '';
        transform: rotate(45deg);
      }

      #tooltip[data-popper-placement^='top'] > #arrow {
        bottom: -4px;
      }

      #tooltip[data-popper-placement^='bottom'] > #arrow {
        top: -4px;
      }

      #tooltip[data-popper-placement^='left'] > #arrow {
        right: -4px;
      }

      #tooltip[data-popper-placement^='right'] > #arrow {
        left: -4px;
      }
</style>

    <button id="button" aria-describedby="tooltip">My button</button>
    <div id="tooltip" role="tooltip">
		<h3 class="popover-header">My tooltip</h3>
		<span>oweiur sdhfk qwpo</span>
      <div id="arrow" data-popper-arrow></div>
    </div>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script>
      const button = document.querySelector('#button');
      const tooltip = document.querySelector('#tooltip');

      const popperInstance = Popper.createPopper(button, tooltip, {
        modifiers: [
          {
            name: 'offset',
            options: {
              offset: [0, 8],
            },
          },
        ],
      });

      function show() {
        // Make the tooltip visible
        tooltip.setAttribute('data-show', '');

        // Enable the event listeners
        popperInstance.setOptions({
          modifiers: [{ name: 'eventListeners', enabled: true }],
        });

        // Update its position
        popperInstance.update();
      }

      function hide() {
        // Hide the tooltip
        tooltip.removeAttribute('data-show');

        // Disable the event listeners
        popperInstance.setOptions({
          modifiers: [{ name: 'eventListeners', enabled: false }],
        });
      }

      const showEvents = ['mouseenter', 'focus'];
      const hideEvents = ['mouseleave', 'blur'];

      showEvents.forEach(event => {
        button.addEventListener(event, show);
      });

      hideEvents.forEach(event => {
        button.addEventListener(event, hide);
      });
    </script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>