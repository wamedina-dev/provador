          <footer class="footer">
            <div class="box-tamanhos">
              <div class="msg-tamanhos">Veja os outros tamanhos</div>
              <div class="botoes-tamanhos">
                <ul class="ulTamanhos">
                  <li class="liTamanhos lkTam" data-id="P"><legend>P</legend><?=$tamanho == "P"?'<img src="imgs/fitas-calc/'.$selo.'">':"";?></li>
                  <li class="liTamanhos lkTam" data-id="M"><legend>M</legend><?=$tamanho == "M"?'<img src="imgs/fitas-calc/'.$selo.'">':"";?></li>
                  <li class="liTamanhos lkTam" data-id="G"><legend>G</legend><?=$tamanho == "G"?'<img src="imgs/fitas-calc/'.$selo.'">':"";?></li>
                  <li class="liTamanhos lkTam" data-id="GG"><legend>GG</legend><?=$tamanho == "GG"?'<img src="imgs/fitas-calc/'.$selo.'">':"";?></li>
                  <li class="liTamanhos lkTam" data-id="XG"><legend>XG</legend><?=$tamanho == "XG"?'<img src="imgs/fitas-calc/'.$selo.'">':"";?></li>
                </ul>
              </div>
            </div>
            <div class="btm-prox">
              <button type="button" class="btn btn-primary" id="reset">Reiniciar</button>
            </div>
          </footer>