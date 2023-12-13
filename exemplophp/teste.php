else {
                            ?>
                              <div class="row">
                                <div class="col-md-7 pr-1">
                                  <div class="form-group">
                                      <label style="background-color: blue;">Vincular empresa</label>
                                      <select class="selectpicker" name="id_empresa" id="user-select" data-live-search="true">
                                        <option value="">Selecione uma empresa</option>
                                        <?php
                                        $empresa_users = get_users(array('role' => 'empresa'));
                                        $id_empresa_selecionada = get_post_meta($idcontrato, 'id_empresa', true); // Obtém o ID da empresa selecionada (suponho que você tenha essa informação)

                                        foreach ($empresa_users as $user) {
                                            $selected = ($id_empresa_selecionada == $user->ID) ? 'selected' : '';
                                            echo '<option value="' . esc_attr($user->ID) . '" ' . $selected . '>' . esc_html($user->display_name) . '</option>';
                                        }
                                        ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-5 pl-1">
                                    <div class="form-group">
                                        <label>Vincular aprendiz</label>
                                        <select class="selectpicker" name="iduser" id="user-select" data-live-search="true">
                                          <option value="">Selecione um aprendiz</option>
                                          <?php
                                          $empresa_users = get_users(array('role' => 'aprendiz'));
                                          $id_aprendiz_selecionada = get_post_meta($idcontrato, 'iduser', true); // Obtém o ID da empresa selecionada (suponho que você tenha essa informação)

                                          foreach ($empresa_users as $user) {
                                              $selected = ($id_aprendiz_selecionada == $user->ID) ? 'selected' : '';
                                              echo '<option value="' . esc_attr($user->ID) . '" ' . $selected . '>' . esc_html($user->display_name) . '</option>';
                                          }
                                          ?>
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-auto mr-auto">
                                  <div class="form-group">
                                    <?php
                                        echo render_wysiwyg_editor();
                                    ?>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                <input type="text" name="ncontrato" value="<?php echo $numeroAleatorio ?>">
                                <button type="submit" name="gerar-contrato" class="btn btn-primary btn-round">Gerar contrato</button>
                                </div>
                            </div>
