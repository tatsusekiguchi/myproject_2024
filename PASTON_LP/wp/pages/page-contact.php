<main class="contact_block section_pdg">
  <div class="inner inner-sm">
    <h2 class="section_ttl txt-ctr mgn-btm16">CONTACT</h2>
    <aside id="contact">
      <div class="inner inner-sm">
        <table class="contact-tel">
          <tr>
            <th>Vitamin K</th>
            <td>TEL.<a href="tel:0586463238" onClick="ga('send', 'event', 'sp', 'tel');">0586-46-3238</a></td>
          </tr>
          <tr>
            <th>BEYOND L’INK</th>
            <td>TEL.<a href="tel:0584822345" onClick="ga('send', 'event', 'sp', 'tel');">0584-82-2345</a></td>
          </tr>
          <tr>
            <th>cantik</th>
            <td>TEL.<a href="tel:0584682330" onClick="ga('send', 'event', 'sp', 'tel');">0584-68-2330</a></td>
          </tr>
          <tr>
            <th>VAN COUNCIL</th>
            <td>TEL.<a href="tel:058-224840" onClick="ga('send', 'event', 'sp', 'tel');">058-322-4840</a></td>
          </tr>
          <tr>
            <th>ABADI</th>
            <td>TEL.<a href="tel:058-910380" onClick="ga('send', 'event', 'sp', 'tel');">058-391-0380</a></td>
          </tr>
           <tr>
            <th>utut</th>
            <td>TEL.<a href="tel:0575299000" onClick="ga('send', 'event', 'sp', 'tel');">0575-29-9000</a></td>
          </tr>
          <tr>
            <th>utatane</th>
            <td>TEL.<a href="tel:0582148889" onClick="ga('send', 'event', 'sp', 'tel');">058-214-8889</a></td>
          </tr>

        </table>

        <?php
          $formy = get_the_author_meta( 'formy', 2 );
          if ($formy) { echo $formy; }
        ?>

      </div>
    </aside>

  </div>
</main>
