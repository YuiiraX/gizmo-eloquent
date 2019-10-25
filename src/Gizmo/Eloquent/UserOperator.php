<?php

namespace Yuiirax\Gizmo\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Yuiirax\Gizmo\Eloquent\UserOperator
 *
 * @property int                                                                                          $UserId
 * @property string                                                                                       $Username
 * @property string|null                                                                                  $Email
 * @property int                                                                                          $ShiftOptions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AssetTransaction[]           $checkedInAssetTransaction
 * @property-read int|null                                                                                $checked_in_asset_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\App[]                        $createdApp
 * @property-read int|null                                                                                $created_app_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppCategory[]                $createdAppCategory
 * @property-read int|null                                                                                $created_app_category_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppEnterprise[]              $createdAppEnterprise
 * @property-read int|null                                                                                $created_app_enterprise_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExe[]                     $createdAppExe
 * @property-read int|null                                                                                $created_app_exe_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeCdImage[]              $createdAppExeCdImage
 * @property-read int|null                                                                                $created_app_exe_cd_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeDeployment[]           $createdAppExeDeployment
 * @property-read int|null                                                                                $created_app_exe_deployment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeImage[]                $createdAppExeImage
 * @property-read int|null                                                                                $created_app_exe_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeLicense[]              $createdAppExeLicense
 * @property-read int|null                                                                                $created_app_exe_license_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser[]              $createdAppExeMaxUser
 * @property-read int|null                                                                                $created_app_exe_max_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExePersonalFile[]         $createdAppExePersonalFile
 * @property-read int|null                                                                                $created_app_exe_personal_file_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeTask[]                 $createdAppExeTask
 * @property-read int|null                                                                                $created_app_exe_task_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppGroup[]                   $createdAppGroup
 * @property-read int|null                                                                                $created_app_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppImage[]                   $createdAppImage
 * @property-read int|null                                                                                $created_app_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppLink[]                    $createdAppLink
 * @property-read int|null                                                                                $created_app_link_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Asset[]                      $createdAsset
 * @property-read int|null                                                                                $created_asset_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AssetTransaction[]           $createdAssetTransaction
 * @property-read int|null                                                                                $created_asset_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AssetType[]                  $createdAssetType
 * @property-read int|null                                                                                $created_asset_type_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Attribute[]                  $createdAttribute
 * @property-read int|null                                                                                $created_attribute_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BillProfile[]                $createdBillProfile
 * @property-read int|null                                                                                $created_bill_profile_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BundleProduct[]              $createdBundleProduct
 * @property-read int|null                                                                                $created_bundle_product_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BundleProductUserPrice[]     $createdBundleProductUserPrice
 * @property-read int|null                                                                                $created_bundle_product_user_price_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ClientTask[]                 $createdClientTask
 * @property-read int|null                                                                                $created_client_task_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Deployment[]                 $createdDeployment
 * @property-read int|null                                                                                $created_deployment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DeploymentDeployment[]       $createdDeploymentDeployment
 * @property-read int|null                                                                                $created_deployment_deployment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DepositPayment[]             $createdDepositPayment
 * @property-read int|null                                                                                $created_deposit_payment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DepositTransaction[]         $createdDepositTransaction
 * @property-read int|null                                                                                $created_deposit_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Feed[]                       $createdFeed
 * @property-read int|null                                                                                $created_feed_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Host[]                       $createdHost
 * @property-read int|null                                                                                $created_host_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroup[]                  $createdHostGroup
 * @property-read int|null                                                                                $created_host_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLine[]       $createdHostGroupWaitingLine
 * @property-read int|null                                                                                $created_host_group_waiting_line_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLineEntry[]  $createdHostGroupWaitingLineEntry
 * @property-read int|null                                                                                $created_host_group_waiting_line_entry_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostLayoutGroup[]            $createdHostLayoutGroup
 * @property-read int|null                                                                                $created_host_layout_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupImage[]       $createdHostLayoutGroupImage
 * @property-read int|null                                                                                $created_host_layout_group_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout[]      $createdHostLayoutGroupLayout
 * @property-read int|null                                                                                $created_host_layout_group_layout_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Icon[]                       $createdIcon
 * @property-read int|null                                                                                $created_icon_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Invoice[]                    $createdInvoice
 * @property-read int|null                                                                                $created_invoice_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\InvoiceLine[]                $createdInvoiceLine
 * @property-read int|null                                                                                $created_invoice_line_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\InvoicePayment[]             $createdInvoicePayment
 * @property-read int|null                                                                                $created_invoice_payment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\License[]                    $createdLicense
 * @property-read int|null                                                                                $created_license_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\LicenseKey[]                 $createdLicenseKey
 * @property-read int|null                                                                                $created_license_key_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Mapping[]                    $createdMapping
 * @property-read int|null                                                                                $created_mapping_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\MonetaryUnit[]               $createdMonetaryUnit
 * @property-read int|null                                                                                $created_monetary_unit_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\News[]                       $createdNews
 * @property-read int|null                                                                                $created_news_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Note[]                       $createdNote
 * @property-read int|null                                                                                $created_note_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Payment[]                    $createdPayment
 * @property-read int|null                                                                                $created_payment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PaymentMethod[]              $createdPaymentMethod
 * @property-read int|null                                                                                $created_payment_method_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PersonalFile[]               $createdPersonalFile
 * @property-read int|null                                                                                $created_personal_file_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PluginLibrary[]              $createdPluginLibrary
 * @property-read int|null                                                                                $created_plugin_library_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PointTransaction[]           $createdPointTransaction
 * @property-read int|null                                                                                $created_point_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PresetTimeSale[]             $createdPresetTimeSale
 * @property-read int|null                                                                                $created_preset_time_sale_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PresetTimeSaleMoney[]        $createdPresetTimeSaleMoney
 * @property-read int|null                                                                                $created_preset_time_sale_money_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductBase[]                $createdProductBase
 * @property-read int|null                                                                                $created_product_base_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductBundleUserPrice[]     $createdProductBundleUserPrice
 * @property-read int|null                                                                                $created_product_bundle_user_price_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductGroup[]               $createdProductGroup
 * @property-read int|null                                                                                $created_product_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductImage[]               $createdProductImage
 * @property-read int|null                                                                                $created_product_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductOL[]                  $createdProductOL
 * @property-read int|null                                                                                $created_product_o_l_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductOrder[]               $createdProductOrder
 * @property-read int|null                                                                                $created_product_order_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductTax[]                 $createdProductTax
 * @property-read int|null                                                                                $created_product_tax_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductTimeHostDisallowed[]  $createdProductTimeHostDisallowed
 * @property-read int|null                                                                                $created_product_time_host_disallowed_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductUserDisallowed[]      $createdProductUserDisallowed
 * @property-read int|null                                                                                $created_product_user_disallowed_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductUserPrice[]           $createdProductUserPrice
 * @property-read int|null                                                                                $created_product_user_price_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Refund[]                     $createdRefund
 * @property-read int|null                                                                                $created_refund_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Register[]                   $createdRegister
 * @property-read int|null                                                                                $created_register_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\RegisterTransaction[]        $createdRegisterTransaction
 * @property-read int|null                                                                                $created_register_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\SecurityProfile[]            $createdSecurityProfile
 * @property-read int|null                                                                                $created_security_profile_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy[]      $createdSecurityProfilePolicy
 * @property-read int|null                                                                                $created_security_profile_policy_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\SecurityProfileRestriction[] $createdSecurityProfileRestriction
 * @property-read int|null                                                                                $created_security_profile_restriction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Setting[]                    $createdSetting
 * @property-read int|null                                                                                $created_setting_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Shift[]                      $createdShift
 * @property-read int|null                                                                                $created_shift_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ShiftCount[]                 $createdShiftCount
 * @property-read int|null                                                                                $created_shift_count_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\StockTransaction[]           $createdStockTransaction
 * @property-read int|null                                                                                $created_stock_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\TaskBase[]                   $createdTaskBase
 * @property-read int|null                                                                                $created_task_base_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Tax[]                        $createdTax
 * @property-read int|null                                                                                $created_tax_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\User[]                       $createdUser
 * @property-read int|null                                                                                $created_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserAttribute[]              $createdUserAttribute
 * @property-read int|null                                                                                $created_user_attribute_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserCredential[]             $createdUserCredential
 * @property-read int|null                                                                                $created_user_credential_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserCreditLimit[]            $createdUserCreditLimit
 * @property-read int|null                                                                                $created_user_credit_limit_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserGroup[]                  $createdUserGroup
 * @property-read int|null                                                                                $created_user_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserGroupHostDisallowed[]    $createdUserGroupHostDisallowed
 * @property-read int|null                                                                                $created_user_group_host_disallowed_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserPermission[]             $createdUserPermission
 * @property-read int|null                                                                                $created_user_permission_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Variable[]                   $createdVariable
 * @property-read int|null                                                                                $created_variable_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\VoidTransaction[]            $createdVoidTransaction
 * @property-read int|null                                                                                $created_void_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Shift[]                      $endedShift
 * @property-read int|null                                                                                $ended_shift_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\App[]                        $modifiedApp
 * @property-read int|null                                                                                $modified_app_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppCategory[]                $modifiedAppCategory
 * @property-read int|null                                                                                $modified_app_category_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppEnterprise[]              $modifiedAppEnterprise
 * @property-read int|null                                                                                $modified_app_enterprise_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExe[]                     $modifiedAppExe
 * @property-read int|null                                                                                $modified_app_exe_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeCdImage[]              $modifiedAppExeCdImage
 * @property-read int|null                                                                                $modified_app_exe_cd_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeDeployment[]           $modifiedAppExeDeployment
 * @property-read int|null                                                                                $modified_app_exe_deployment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeImage[]                $modifiedAppExeImage
 * @property-read int|null                                                                                $modified_app_exe_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeLicense[]              $modifiedAppExeLicense
 * @property-read int|null                                                                                $modified_app_exe_license_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeMaxUser[]              $modifiedAppExeMaxUser
 * @property-read int|null                                                                                $modified_app_exe_max_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExePersonalFile[]         $modifiedAppExePersonalFile
 * @property-read int|null                                                                                $modified_app_exe_personal_file_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppExeTask[]                 $modifiedAppExeTask
 * @property-read int|null                                                                                $modified_app_exe_task_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppGroup[]                   $modifiedAppGroup
 * @property-read int|null                                                                                $modified_app_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppImage[]                   $modifiedAppImage
 * @property-read int|null                                                                                $modified_app_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AppLink[]                    $modifiedAppLink
 * @property-read int|null                                                                                $modified_app_link_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Asset[]                      $modifiedAsset
 * @property-read int|null                                                                                $modified_asset_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AssetTransaction[]           $modifiedAssetTransaction
 * @property-read int|null                                                                                $modified_asset_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\AssetType[]                  $modifiedAssetType
 * @property-read int|null                                                                                $modified_asset_type_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Attribute[]                  $modifiedAttribute
 * @property-read int|null                                                                                $modified_attribute_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BillProfile[]                $modifiedBillProfile
 * @property-read int|null                                                                                $modified_bill_profile_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BundleProduct[]              $modifiedBundleProduct
 * @property-read int|null                                                                                $modified_bundle_product_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\BundleProductUserPrice[]     $modifiedBundleProductUserPrice
 * @property-read int|null                                                                                $modified_bundle_product_user_price_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ClientTask[]                 $modifiedClientTask
 * @property-read int|null                                                                                $modified_client_task_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Deployment[]                 $modifiedDeployment
 * @property-read int|null                                                                                $modified_deployment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DeploymentDeployment[]       $modifiedDeploymentDeployment
 * @property-read int|null                                                                                $modified_deployment_deployment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DepositPayment[]             $modifiedDepositPayment
 * @property-read int|null                                                                                $modified_deposit_payment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\DepositTransaction[]         $modifiedDepositTransaction
 * @property-read int|null                                                                                $modified_deposit_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Feed[]                       $modifiedFeed
 * @property-read int|null                                                                                $modified_feed_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Host[]                       $modifiedHost
 * @property-read int|null                                                                                $modified_host_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroup[]                  $modifiedHostGroup
 * @property-read int|null                                                                                $modified_host_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostGroupWaitingLine[]       $modifiedHostGroupWaitingLine
 * @property-read int|null                                                                                $modified_host_group_waiting_line_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostLayoutGroup[]            $modifiedHostLayoutGroup
 * @property-read int|null                                                                                $modified_host_layout_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupImage[]       $modifiedHostLayoutGroupImage
 * @property-read int|null                                                                                $modified_host_layout_group_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\HostLayoutGroupLayout[]      $modifiedHostLayoutGroupLayout
 * @property-read int|null                                                                                $modified_host_layout_group_layout_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Icon[]                       $modifiedIcon
 * @property-read int|null                                                                                $modified_icon_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Invoice[]                    $modifiedInvoice
 * @property-read int|null                                                                                $modified_invoice_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\InvoiceLine[]                $modifiedInvoiceLine
 * @property-read int|null                                                                                $modified_invoice_line_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\InvoicePayment[]             $modifiedInvoicePayment
 * @property-read int|null                                                                                $modified_invoice_payment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\License[]                    $modifiedLicense
 * @property-read int|null                                                                                $modified_license_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\LicenseKey[]                 $modifiedLicenseKey
 * @property-read int|null                                                                                $modified_license_key_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Mapping[]                    $modifiedMapping
 * @property-read int|null                                                                                $modified_mapping_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\MonetaryUnit[]               $modifiedMonetaryUnit
 * @property-read int|null                                                                                $modified_monetary_unit_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\News[]                       $modifiedNews
 * @property-read int|null                                                                                $modified_news_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Note[]                       $modifiedNote
 * @property-read int|null                                                                                $modified_note_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Payment[]                    $modifiedPayment
 * @property-read int|null                                                                                $modified_payment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PaymentMethod[]              $modifiedPaymentMethod
 * @property-read int|null                                                                                $modified_payment_method_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PersonalFile[]               $modifiedPersonalFile
 * @property-read int|null                                                                                $modified_personal_file_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PluginLibrary[]              $modifiedPluginLibrary
 * @property-read int|null                                                                                $modified_plugin_library_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PointTransaction[]           $modifiedPointTransaction
 * @property-read int|null                                                                                $modified_point_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PresetTimeSale[]             $modifiedPresetTimeSale
 * @property-read int|null                                                                                $modified_preset_time_sale_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\PresetTimeSaleMoney[]        $modifiedPresetTimeSaleMoney
 * @property-read int|null                                                                                $modified_preset_time_sale_money_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductBase[]                $modifiedProductBase
 * @property-read int|null                                                                                $modified_product_base_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductBundleUserPrice[]     $modifiedProductBundleUserPrice
 * @property-read int|null                                                                                $modified_product_bundle_user_price_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductGroup[]               $modifiedProductGroup
 * @property-read int|null                                                                                $modified_product_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductImage[]               $modifiedProductImage
 * @property-read int|null                                                                                $modified_product_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductOL[]                  $modifiedProductOL
 * @property-read int|null                                                                                $modified_product_o_l_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductOrder[]               $modifiedProductOrder
 * @property-read int|null                                                                                $modified_product_order_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductTax[]                 $modifiedProductTax
 * @property-read int|null                                                                                $modified_product_tax_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductTimeHostDisallowed[]  $modifiedProductTimeHostDisallowed
 * @property-read int|null                                                                                $modified_product_time_host_disallowed_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductUserDisallowed[]      $modifiedProductUserDisallowed
 * @property-read int|null                                                                                $modified_product_user_disallowed_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ProductUserPrice[]           $modifiedProductUserPrice
 * @property-read int|null                                                                                $modified_product_user_price_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Register[]                   $modifiedRegister
 * @property-read int|null                                                                                $modified_register_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\RegisterTransaction[]        $modifiedRegisterTransaction
 * @property-read int|null                                                                                $modified_register_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\SecurityProfile[]            $modifiedSecurityProfile
 * @property-read int|null                                                                                $modified_security_profile_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\SecurityProfilePolicy[]      $modifiedSecurityProfilePolicy
 * @property-read int|null                                                                                $modified_security_profile_policy_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\SecurityProfileRestriction[] $modifiedSecurityProfileRestriction
 * @property-read int|null                                                                                $modified_security_profile_restriction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Setting[]                    $modifiedSetting
 * @property-read int|null                                                                                $modified_setting_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Shift[]                      $modifiedShift
 * @property-read int|null                                                                                $modified_shift_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\ShiftCount[]                 $modifiedShiftCount
 * @property-read int|null                                                                                $modified_shift_count_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\StockTransaction[]           $modifiedStockTransaction
 * @property-read int|null                                                                                $modified_stock_transaction_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\TaskBase[]                   $modifiedTaskBase
 * @property-read int|null                                                                                $modified_task_base_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Tax[]                        $modifiedTax
 * @property-read int|null                                                                                $modified_tax_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserAttribute[]              $modifiedUserAttribute
 * @property-read int|null                                                                                $modified_user_attribute_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserCredential[]             $modifiedUserCredential
 * @property-read int|null                                                                                $modified_user_credential_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserCreditLimit[]            $modifiedUserCreditLimit
 * @property-read int|null                                                                                $modified_user_credit_limit_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserGroup[]                  $modifiedUserGroup
 * @property-read int|null                                                                                $modified_user_group_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserGroupHostDisallowed[]    $modifiedUserGroupHostDisallowed
 * @property-read int|null                                                                                $modified_user_group_host_disallowed_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\UserPermission[]             $modifiedUserPermission
 * @property-read int|null                                                                                $modified_user_permission_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Variable[]                   $modifiedVariable
 * @property-read int|null                                                                                $modified_variable_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yuiirax\Gizmo\Eloquent\Shift[]                      $shift
 * @property-read int|null                                                                                $shift_count
 * @property-read \Yuiirax\Gizmo\Eloquent\User                                                                  $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserOperator newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserOperator newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserOperator query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserOperator whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserOperator whereShiftOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserOperator whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Yuiirax\Gizmo\Eloquent\UserOperator whereUsername($value)
 * @mixin \Eloquent
 */
class UserOperator extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UserOperator';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'UserId';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Username',
                           'Email',
                           'ShiftOptions'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d\TH:i:s';

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'gizmos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'UserId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function endedShift()
    {
        return $this->hasMany(Shift::class, 'Ended', 'Ended');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shift()
    {
        return $this->hasMany(Shift::class, 'OperatorId', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function checkedInAssetTransaction()
    {
        return $this->hasMany(AssetTransaction::class, 'CheckedInById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdApp()
    {
        return $this->hasMany(App::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedApp()
    {
        return $this->hasMany(App::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppCategory()
    {
        return $this->hasMany(AppCategory::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppCategory()
    {
        return $this->hasMany(AppCategory::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppEnterprise()
    {
        return $this->hasMany(AppEnterprise::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppEnterprise()
    {
        return $this->hasMany(AppEnterprise::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppExe()
    {
        return $this->hasMany(AppExe::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppExe()
    {
        return $this->hasMany(AppExe::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppExeCdImage()
    {
        return $this->hasMany(AppExeCdImage::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppExeCdImage()
    {
        return $this->hasMany(AppExeCdImage::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppExeDeployment()
    {
        return $this->hasMany(AppExeDeployment::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppExeDeployment()
    {
        return $this->hasMany(AppExeDeployment::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppExeImage()
    {
        return $this->hasMany(AppExeImage::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppExeImage()
    {
        return $this->hasMany(AppExeImage::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppExeLicense()
    {
        return $this->hasMany(AppExeLicense::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppExeLicense()
    {
        return $this->hasMany(AppExeLicense::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppExeMaxUser()
    {
        return $this->hasMany(AppExeMaxUser::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppExeMaxUser()
    {
        return $this->hasMany(AppExeMaxUser::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppExePersonalFile()
    {
        return $this->hasMany(AppExePersonalFile::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppExePersonalFile()
    {
        return $this->hasMany(AppExePersonalFile::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppExeTask()
    {
        return $this->hasMany(AppExeTask::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppExeTask()
    {
        return $this->hasMany(AppExeTask::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppGroup()
    {
        return $this->hasMany(AppGroup::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppGroup()
    {
        return $this->hasMany(AppGroup::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppImage()
    {
        return $this->hasMany(AppImage::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppImage()
    {
        return $this->hasMany(AppImage::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAppLink()
    {
        return $this->hasMany(AppLink::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAppLink()
    {
        return $this->hasMany(AppLink::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAsset()
    {
        return $this->hasMany(Asset::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAsset()
    {
        return $this->hasMany(Asset::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAssetTransaction()
    {
        return $this->hasMany(AssetTransaction::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAssetTransaction()
    {
        return $this->hasMany(AssetTransaction::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAssetType()
    {
        return $this->hasMany(AssetType::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAssetType()
    {
        return $this->hasMany(AssetType::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdAttribute()
    {
        return $this->hasMany(Attribute::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedAttribute()
    {
        return $this->hasMany(Attribute::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdBillProfile()
    {
        return $this->hasMany(BillProfile::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedBillProfile()
    {
        return $this->hasMany(BillProfile::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdBundleProduct()
    {
        return $this->hasMany(BundleProduct::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedBundleProduct()
    {
        return $this->hasMany(BundleProduct::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdBundleProductUserPrice()
    {
        return $this->hasMany(BundleProductUserPrice::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedBundleProductUserPrice()
    {
        return $this->hasMany(BundleProductUserPrice::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdClientTask()
    {
        return $this->hasMany(ClientTask::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedClientTask()
    {
        return $this->hasMany(ClientTask::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdDeployment()
    {
        return $this->hasMany(Deployment::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedDeployment()
    {
        return $this->hasMany(Deployment::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdDeploymentDeployment()
    {
        return $this->hasMany(DeploymentDeployment::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedDeploymentDeployment()
    {
        return $this->hasMany(DeploymentDeployment::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdDepositPayment()
    {
        return $this->hasMany(DepositPayment::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedDepositPayment()
    {
        return $this->hasMany(DepositPayment::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdDepositTransaction()
    {
        return $this->hasMany(DepositTransaction::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedDepositTransaction()
    {
        return $this->hasMany(DepositTransaction::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdFeed()
    {
        return $this->hasMany(Feed::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedFeed()
    {
        return $this->hasMany(Feed::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdHost()
    {
        return $this->hasMany(Host::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedHost()
    {
        return $this->hasMany(Host::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdHostGroup()
    {
        return $this->hasMany(HostGroup::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedHostGroup()
    {
        return $this->hasMany(HostGroup::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdHostGroupWaitingLine()
    {
        return $this->hasMany(HostGroupWaitingLine::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedHostGroupWaitingLine()
    {
        return $this->hasMany(HostGroupWaitingLine::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdHostGroupWaitingLineEntry()
    {
        return $this->hasMany(HostGroupWaitingLineEntry::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdHostLayoutGroup()
    {
        return $this->hasMany(HostLayoutGroup::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedHostLayoutGroup()
    {
        return $this->hasMany(HostLayoutGroup::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdHostLayoutGroupImage()
    {
        return $this->hasMany(HostLayoutGroupImage::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedHostLayoutGroupImage()
    {
        return $this->hasMany(HostLayoutGroupImage::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdHostLayoutGroupLayout()
    {
        return $this->hasMany(HostLayoutGroupLayout::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedHostLayoutGroupLayout()
    {
        return $this->hasMany(HostLayoutGroupLayout::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdIcon()
    {
        return $this->hasMany(Icon::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedIcon()
    {
        return $this->hasMany(Icon::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdInvoice()
    {
        return $this->hasMany(Invoice::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedInvoice()
    {
        return $this->hasMany(Invoice::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdInvoiceLine()
    {
        return $this->hasMany(InvoiceLine::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedInvoiceLine()
    {
        return $this->hasMany(InvoiceLine::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdInvoicePayment()
    {
        return $this->hasMany(InvoicePayment::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedInvoicePayment()
    {
        return $this->hasMany(InvoicePayment::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdLicense()
    {
        return $this->hasMany(License::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedLicense()
    {
        return $this->hasMany(License::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdLicenseKey()
    {
        return $this->hasMany(LicenseKey::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedLicenseKey()
    {
        return $this->hasMany(LicenseKey::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdMapping()
    {
        return $this->hasMany(Mapping::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedMapping()
    {
        return $this->hasMany(Mapping::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdNews()
    {
        return $this->hasMany(News::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedNews()
    {
        return $this->hasMany(News::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdNote()
    {
        return $this->hasMany(Note::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedNote()
    {
        return $this->hasMany(Note::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdPayment()
    {
        return $this->hasMany(Payment::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedPayment()
    {
        return $this->hasMany(Payment::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdPaymentMethod()
    {
        return $this->hasMany(PaymentMethod::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedPaymentMethod()
    {
        return $this->hasMany(PaymentMethod::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdPersonalFile()
    {
        return $this->hasMany(PersonalFile::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedPersonalFile()
    {
        return $this->hasMany(PersonalFile::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdPluginLibrary()
    {
        return $this->hasMany(PluginLibrary::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedPluginLibrary()
    {
        return $this->hasMany(PluginLibrary::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdPointTransaction()
    {
        return $this->hasMany(PointTransaction::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedPointTransaction()
    {
        return $this->hasMany(PointTransaction::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdPresetTimeSale()
    {
        return $this->hasMany(PresetTimeSale::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedPresetTimeSale()
    {
        return $this->hasMany(PresetTimeSale::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdPresetTimeSaleMoney()
    {
        return $this->hasMany(PresetTimeSaleMoney::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedPresetTimeSaleMoney()
    {
        return $this->hasMany(PresetTimeSaleMoney::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductBase()
    {
        return $this->hasMany(ProductBase::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductBase()
    {
        return $this->hasMany(ProductBase::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductBundleUserPrice()
    {
        return $this->hasMany(ProductBundleUserPrice::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductBundleUserPrice()
    {
        return $this->hasMany(ProductBundleUserPrice::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductGroup()
    {
        return $this->hasMany(ProductGroup::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductGroup()
    {
        return $this->hasMany(ProductGroup::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductImage()
    {
        return $this->hasMany(ProductImage::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductImage()
    {
        return $this->hasMany(ProductImage::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductOL()
    {
        return $this->hasMany(ProductOL::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductOL()
    {
        return $this->hasMany(ProductOL::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductOrder()
    {
        return $this->hasMany(ProductOrder::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductOrder()
    {
        return $this->hasMany(ProductOrder::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductTax()
    {
        return $this->hasMany(ProductTax::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductTax()
    {
        return $this->hasMany(ProductTax::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductTimeHostDisallowed()
    {
        return $this->hasMany(ProductTimeHostDisallowed::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductTimeHostDisallowed()
    {
        return $this->hasMany(ProductTimeHostDisallowed::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductUserDisallowed()
    {
        return $this->hasMany(ProductUserDisallowed::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductUserDisallowed()
    {
        return $this->hasMany(ProductUserDisallowed::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdProductUserPrice()
    {
        return $this->hasMany(ProductUserPrice::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedProductUserPrice()
    {
        return $this->hasMany(ProductUserPrice::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdRefund()
    {
        return $this->hasMany(Refund::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdRegister()
    {
        return $this->hasMany(Register::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedRegister()
    {
        return $this->hasMany(Register::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdRegisterTransaction()
    {
        return $this->hasMany(RegisterTransaction::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedRegisterTransaction()
    {
        return $this->hasMany(RegisterTransaction::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdSecurityProfile()
    {
        return $this->hasMany(SecurityProfile::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedSecurityProfile()
    {
        return $this->hasMany(SecurityProfile::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdSecurityProfilePolicy()
    {
        return $this->hasMany(SecurityProfilePolicy::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedSecurityProfilePolicy()
    {
        return $this->hasMany(SecurityProfilePolicy::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdSecurityProfileRestriction()
    {
        return $this->hasMany(SecurityProfileRestriction::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedSecurityProfileRestriction()
    {
        return $this->hasMany(SecurityProfileRestriction::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdSetting()
    {
        return $this->hasMany(Setting::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedSetting()
    {
        return $this->hasMany(Setting::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdShift()
    {
        return $this->hasMany(Shift::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedShift()
    {
        return $this->hasMany(Shift::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdShiftCount()
    {
        return $this->hasMany(ShiftCount::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedShiftCount()
    {
        return $this->hasMany(ShiftCount::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdStockTransaction()
    {
        return $this->hasMany(StockTransaction::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedStockTransaction()
    {
        return $this->hasMany(StockTransaction::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdTaskBase()
    {
        return $this->hasMany(TaskBase::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedTaskBase()
    {
        return $this->hasMany(TaskBase::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdTax()
    {
        return $this->hasMany(Tax::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedTax()
    {
        return $this->hasMany(Tax::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUser()
    {
        return $this->hasMany(User::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUserAttribute()
    {
        return $this->hasMany(UserAttribute::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedUserAttribute()
    {
        return $this->hasMany(UserAttribute::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUserCredential()
    {
        return $this->hasMany(UserCredential::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedUserCredential()
    {
        return $this->hasMany(UserCredential::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUserCreditLimit()
    {
        return $this->hasMany(UserCreditLimit::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedUserCreditLimit()
    {
        return $this->hasMany(UserCreditLimit::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUserGroup()
    {
        return $this->hasMany(UserGroup::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedUserGroup()
    {
        return $this->hasMany(UserGroup::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUserGroupHostDisallowed()
    {
        return $this->hasMany(UserGroupHostDisallowed::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedUserGroupHostDisallowed()
    {
        return $this->hasMany(UserGroupHostDisallowed::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdUserPermission()
    {
        return $this->hasMany(UserPermission::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedUserPermission()
    {
        return $this->hasMany(UserPermission::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdVariable()
    {
        return $this->hasMany(Variable::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedVariable()
    {
        return $this->hasMany(Variable::class, 'ModifiedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdVoidTransaction()
    {
        return $this->hasMany(VoidTransaction::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function createdMonetaryUnit()
    {
        return $this->hasMany(MonetaryUnit::class, 'CreatedById', 'UserId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modifiedMonetaryUnit()
    {
        return $this->hasMany(MonetaryUnit::class, 'ModifiedById', 'UserId');
    }
}
