<div id="edit-email" class="cdk-overlay-container hidden">
    <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing"></div>
    <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
        <div id="cdk-overlay-1" class="cdk-overlay-pane" style="max-width: 100vw; position: static;">
            <et-dialog-container tabindex="-1"
                class="dialog-container ng-tns-c1415986070-56 ng-trigger ng-trigger-dialogContainer ng-star-inserted"
                _nghost-ng-c1415986070="" style="transform: none;">
                <et-generic-email-verification-main class="ng-star-inserted">
                    <div class="gev01-main-container">
                        <!---->
                        <et-generic-email-verification-change-email class="gev01-child-component ng-star-inserted"
                            _nghost-ng-c1473966146="">
                            <form _ngcontent-ng-c1473966146="" novalidate="" automation-id="change-email-container"
                                class="gev01-box-container ng-pristine ng-invalid ng-touched">
                                <div _ngcontent-ng-c1473966146="" class="gev01-top-buttons-container">
                                    <!----><button _ngcontent-ng-c1473966146="" type="button"
                                    onclick="toggleClass('edit-email', 'hidden')"
                                        automation-id="change-email-close-button"
                                        class="gev01-close-button ets-icon-close-rounded-corners ng-star-inserted"></button>
                                    <!---->
                                </div>
                                <div _ngcontent-ng-c1473966146="" class="gev01-box-body">
                                    <div _ngcontent-ng-c1473966146="" class="gev01-box-top">
                                        <div _ngcontent-ng-c1473966146="" automation-id="change-email-title"
                                            class="gev01-box-title ets-title-main"> Enter New Address </div>
                                        <div _ngcontent-ng-c1473966146="" automation-id="change-email-subtitle"
                                            class="gev01-box-description"> Type in the new address you wish to associate
                                            your account with. </div>
                                        <div _ngcontent-ng-c1473966146="" class="content-top">
                                            <div _ngcontent-ng-c1473966146="" class="input-wrapper">
                                                <ets-input _ngcontent-ng-c1473966146="" _nghost-ng-c143139028="">
                                                    <div _ngcontent-ng-c143139028="" class="ets-input-row-ph"><input
                                                            _ngcontent-ng-c1473966146="" etinputfield="" autofocus=""
                                                            required="" automation-id="change-email-input"
                                                            placeholder="1"
                                                            class="ets-input-row ng-pristine ng-invalid ng-touched"><span
                                                            _ngcontent-ng-c143139028=""
                                                            class="ets-line-animation"></span><label
                                                            _ngcontent-ng-c1473966146="" etslabelinputslot=""> Email
                                                        </label>
                                                        <div _ngcontent-ng-c143139028="" class="ets-input-icon-wrapper">
                                                        </div>
                                                    </div>
                                                </ets-input>
                                            </div>
                                            <div _ngcontent-ng-c1473966146=""
                                                automation-id="change-email-error-container"
                                                class="gev01-error-container ets-info ets-negative-word">
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-ng-c1473966146="" class="gev01-box-bottom"><button
                                            _ngcontent-ng-c1473966146="" type="submit"
                                            automation-id="change-email-submit-button"
                                            class="submit-button ets-button-basic ets-button-big ets-button-primary"
                                            disabled=""> Done </button></div>
                                </div>
                            </form>
                        </et-generic-email-verification-change-email>
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </et-generic-email-verification-main>
                <!---->
            </et-dialog-container>
        </div>
    </div>
</div>

<div id="edit-password" class="cdk-overlay-container hidden">
    <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing"></div>
    <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
        <div id="cdk-overlay-0" class="cdk-overlay-pane" style="max-width: 100vw; position: static;">
            <et-dialog-container tabindex="-1"
                class="dialog-container ng-tns-c1415986070-4 ng-trigger ng-trigger-dialogContainer ng-star-inserted"
                _nghost-ng-c1415986070="" style="transform: none;">
                <et-change-password _nghost-ng-c440775911="" class="ng-star-inserted">
                    <div _ngcontent-ng-c440775911="" automation-id="change-password-main-title" class="pop-title">Change
                        Password</div><a _ngcontent-ng-c440775911="" automation-id="change-password-close-btn"
                        onclick="toggleClass('edit-password', 'hidden')"
                        class="close sprite"></a>
                    <form _ngcontent-ng-c440775911="" novalidate="" name="changePwdForm"
                        class="pop-content ng-pristine ng-invalid ng-touched">
                        <p _ngcontent-ng-c440775911="" automation-id="change-password-subtitle" class="pop-subtitle">We
                            recommend you to choose a strong password. A solid password will be hard for computers and
                            humans to guess.</p>
                        <!---->
                        <div _ngcontent-ng-c440775911="" automation-id="change-password-err-msg"
                            class="error ng-star-inserted">Your Password should consist of 8-32 letters and numbers with
                            either uppercase letters or symbols (~ ! @ # $ % ^ &amp; * ( ) - _ = + / \).</div>
                        <!---->
                        <div _ngcontent-ng-c440775911="" class="change-password-fields"><input
                                _ngcontent-ng-c440775911="" formcontrolname="currentPassword"
                                automation-id="change-password-curr-password-textbox" id="currentPassword"
                                type="password" class="change-password-input ng-pristine ng-invalid ng-touched"
                                placeholder="Enter current password">
                            <div _ngcontent-ng-c440775911="" class="error ng-star-inserted"><span
                                    _ngcontent-ng-c440775911="" automation-id="change-password-old-required-error"
                                    class="ng-star-inserted">Please enter current password</span>
                                <!---->
                            </div>
                            <!---->
                            <div _ngcontent-ng-c440775911="" class="change-password-input-strength-row"><input
                                    _ngcontent-ng-c440775911="" formcontrolname="newPassword"
                                    automation-id="change-password-new-password-textbox" id="newPassword"
                                    type="password" class="change-password-input ng-pristine ng-invalid ng-touched"
                                    placeholder="Enter new password">
                                <!---->
                            </div>
                            <div _ngcontent-ng-c440775911="" class="error form-error-wrapper ng-star-inserted"><span
                                    _ngcontent-ng-c440775911="" automation-id="change-password-required-error"
                                    class="ng-star-inserted">Enter new password</span>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span _ngcontent-ng-c440775911="" automation-id="change-password-strength-error"
                                    class="ng-star-inserted">Please enter a valid password</span>
                                <!---->
                            </div>
                            <!---->
                            <div _ngcontent-ng-c440775911="" class="change-password-input-strength-row"><input
                                    _ngcontent-ng-c440775911="" formcontrolname="newPasswordConfirm"
                                    automation-id="change-password-confirm-new-password-textbox" id="newPasswordConfirm"
                                    type="password" class="change-password-input ng-pristine ng-invalid ng-touched"
                                    placeholder="Confirm Password">
                                <!---->
                            </div>
                            <div _ngcontent-ng-c440775911="" class="error form-error-wrapper ng-star-inserted"><span
                                    _ngcontent-ng-c440775911="" automation-id="change-password-confirm-required-error"
                                    class="ng-star-inserted">Confirm new password</span>
                                <!---->
                                <!---->
                            </div>
                            <!---->
                        </div>
                    </form>
                    <div _ngcontent-ng-c440775911="" class="change-password-footer"><a _ngcontent-ng-c440775911=""
                            automation-id="change-password-btn-submit"
                            class="change-password-footer-button pointer">Submit</a></div>
                </et-change-password>
                <!---->
            </et-dialog-container>
        </div>
    </div>
</div>

<div id="edit-phone" class="cdk-overlay-container hidden">
    <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing"></div>
    <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
        <div id="cdk-overlay-1" class="cdk-overlay-pane" style="max-width: 100vw; position: static;">
            <et-dialog-container tabindex="-1"
                class="dialog-container ng-tns-c1415986070-56 ng-trigger ng-trigger-dialogContainer ng-star-inserted"
                _nghost-ng-c1415986070="" style="transform: none;">
                <et-generic-email-verification-main class="ng-star-inserted">
                    <div class="gev01-main-container">
                        <!---->
                        <et-generic-email-verification-change-email class="gev01-child-component ng-star-inserted"
                            _nghost-ng-c1473966146="">
                            <form _ngcontent-ng-c1473966146="" novalidate="" automation-id="change-email-container"
                                class="gev01-box-container ng-pristine ng-invalid ng-touched">
                                <div _ngcontent-ng-c1473966146="" class="gev01-top-buttons-container">
                                    <!----><button _ngcontent-ng-c1473966146="" type="button"
                                        automation-id="change-email-close-button"
                                        onclick="toggleClass('edit-phone', 'hidden')"
                                        class="gev01-close-button ets-icon-close-rounded-corners ng-star-inserted"></button>
                                    <!---->
                                </div>
                                <div _ngcontent-ng-c1473966146="" class="gev01-box-body">
                                    <div _ngcontent-ng-c1473966146="" class="gev01-box-top">
                                        <div _ngcontent-ng-c1473966146="" automation-id="change-email-title"
                                            class="gev01-box-title ets-title-main"> Enter New Phone </div>
                                        <div _ngcontent-ng-c1473966146="" automation-id="change-email-subtitle"
                                            class="gev01-box-description"> Type in the new phone you wish to associate
                                            your account with. </div>
                                        <div _ngcontent-ng-c1473966146="" class="content-top">
                                            <div _ngcontent-ng-c1473966146="" class="input-wrapper">
                                                <ets-input _ngcontent-ng-c1473966146="" _nghost-ng-c143139028="">
                                                    <div _ngcontent-ng-c143139028="" class="ets-input-row-ph"><input
                                                            _ngcontent-ng-c1473966146="" etinputfield="" autofocus=""
                                                            required="" automation-id="change-email-input"
                                                            placeholder="1"
                                                            class="ets-input-row ng-pristine ng-invalid ng-touched"><span
                                                            _ngcontent-ng-c143139028=""
                                                            class="ets-line-animation"></span><label
                                                            _ngcontent-ng-c1473966146="" etslabelinputslot=""> Phone
                                                        </label>
                                                        <div _ngcontent-ng-c143139028="" class="ets-input-icon-wrapper">
                                                        </div>
                                                    </div>
                                                </ets-input>
                                            </div>
                                            <div _ngcontent-ng-c1473966146=""
                                                automation-id="change-email-error-container"
                                                class="gev01-error-container ets-info ets-negative-word">
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-ng-c1473966146="" class="gev01-box-bottom"><button
                                            _ngcontent-ng-c1473966146="" type="submit"
                                            automation-id="change-email-submit-button"
                                            class="submit-button ets-button-basic ets-button-big ets-button-primary"
                                            disabled=""> Done </button></div>
                                </div>
                            </form>
                        </et-generic-email-verification-change-email>
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </et-generic-email-verification-main>
                <!---->
            </et-dialog-container>
        </div>
    </div>
</div>