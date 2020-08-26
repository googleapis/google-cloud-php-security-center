<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1;

class SecuritycenterService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\RunAssetDiscoveryResponse::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Asset::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Finding::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\NotificationConfig::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\OrganizationSettings::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecurityMarks::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Source::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aef5f0a42676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f736563757269747963656e7465725f736572766963652e70726f746f1225676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461311a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a31676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f61737365742e70726f746f1a33676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f66696e64696e672e70726f746f1a3f676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f6e6f74696669636174696f6e5f636f6e6669672e70726f746f1a41676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f6f7267616e697a6174696f6e5f73657474696e67732e70726f746f1a3a676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f73656375726974795f6d61726b732e70726f746f1a32676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f736f757263652e70726f746f1a1e676f6f676c652f69616d2f76312f69616d5f706f6c6963792e70726f746f1a1a676f6f676c652f69616d2f76312f706f6c6963792e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a1c676f6f676c652f70726f746f6275662f7374727563742e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22b3010a1443726561746546696e64696e6752657175657374123c0a06706172656e74180120012809422ce04102fa41260a24736563757269747963656e7465722e676f6f676c65617069732e636f6d2f536f7572636512170a0a66696e64696e675f69641802200128094203e0410212440a0766696e64696e6718032001280b322e2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e46696e64696e674203e0410222e0010a1f4372656174654e6f74696669636174696f6e436f6e6669675265717565737412480a06706172656e741801200128094238e04102fa41320a30636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f4f7267616e697a6174696f6e12160a09636f6e6669675f69641802200128094203e04102125b0a136e6f74696669636174696f6e5f636f6e66696718032001280b32392e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4e6f74696669636174696f6e436f6e6669674203e0410222a3010a13437265617465536f757263655265717565737412480a06706172656e741801200128094238e04102fa41320a30636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f4f7267616e697a6174696f6e12420a06736f7572636518022001280b322d2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e536f757263654203e0410222690a1f44656c6574654e6f74696669636174696f6e436f6e6669675265717565737412460a046e616d651801200128094238e04102fa41320a30736563757269747963656e7465722e676f6f676c65617069732e636f6d2f4e6f74696669636174696f6e436f6e66696722660a1c4765744e6f74696669636174696f6e436f6e6669675265717565737412460a046e616d651801200128094238e04102fa41320a30736563757269747963656e7465722e676f6f676c65617069732e636f6d2f4e6f74696669636174696f6e436f6e666967226a0a1e4765744f7267616e697a6174696f6e53657474696e67735265717565737412480a046e616d65180120012809423ae04102fa41340a32736563757269747963656e7465722e676f6f676c65617069732e636f6d2f4f7267616e697a6174696f6e53657474696e6773224e0a10476574536f7572636552657175657374123a0a046e616d65180120012809422ce04102fa41260a24736563757269747963656e7465722e676f6f676c65617069732e636f6d2f536f757263652290020a1247726f75704173736574735265717565737412480a06706172656e741801200128094238e04102fa41320a30636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f4f7267616e697a6174696f6e120e0a0666696c74657218022001280912150a0867726f75705f62791803200128094203e0410212330a10636f6d706172655f6475726174696f6e18042001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e122d0a09726561645f74696d6518052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012120a0a706167655f746f6b656e18072001280912110a09706167655f73697a6518082001280522bf010a1347726f7570417373657473526573706f6e7365124c0a1067726f75705f62795f726573756c747318012003280b32322e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e47726f7570526573756c74122d0a09726561645f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012170a0f6e6578745f706167655f746f6b656e18032001280912120a0a746f74616c5f73697a651804200128052286020a1447726f757046696e64696e677352657175657374123c0a06706172656e74180120012809422ce04102fa41260a24736563757269747963656e7465722e676f6f676c65617069732e636f6d2f536f75726365120e0a0666696c74657218022001280912150a0867726f75705f62791803200128094203e04102122d0a09726561645f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012330a10636f6d706172655f6475726174696f6e18052001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e12120a0a706167655f746f6b656e18072001280912110a09706167655f73697a6518082001280522c1010a1547726f757046696e64696e6773526573706f6e7365124c0a1067726f75705f62795f726573756c747318012003280b32322e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e47726f7570526573756c74122d0a09726561645f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012170a0f6e6578745f706167655f746f6b656e18032001280912120a0a746f74616c5f73697a6518042001280522bf010a0b47726f7570526573756c7412560a0a70726f7065727469657318012003280b32422e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e47726f7570526573756c742e50726f70657274696573456e747279120d0a05636f756e741802200128031a490a0f50726f70657274696573456e747279120b0a036b657918012001280912250a0576616c756518022001280b32162e676f6f676c652e70726f746f6275662e56616c75653a0238012291010a1e4c6973744e6f74696669636174696f6e436f6e666967735265717565737412480a06706172656e741801200128094238e04102fa41320a30636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f4f7267616e697a6174696f6e12120a0a706167655f746f6b656e18022001280912110a09706167655f73697a651803200128052293010a1f4c6973744e6f74696669636174696f6e436f6e66696773526573706f6e736512570a146e6f74696669636174696f6e5f636f6e6669677318012003280b32392e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4e6f74696669636174696f6e436f6e66696712170a0f6e6578745f706167655f746f6b656e1802200128092285010a124c697374536f75726365735265717565737412480a06706172656e741801200128094238e04102fa41320a30636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f4f7267616e697a6174696f6e12120a0a706167655f746f6b656e18022001280912110a09706167655f73697a65180720012805226e0a134c697374536f7572636573526573706f6e7365123e0a07736f757263657318012003280b322d2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e536f7572636512170a0f6e6578745f706167655f746f6b656e18022001280922ba020a114c6973744173736574735265717565737412480a06706172656e741801200128094238e04102fa41320a30636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f4f7267616e697a6174696f6e120e0a0666696c74657218022001280912100a086f726465725f6279180320012809122d0a09726561645f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012330a10636f6d706172655f6475726174696f6e18052001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e122e0a0a6669656c645f6d61736b18072001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b12120a0a706167655f746f6b656e18082001280912110a09706167655f73697a6518092001280522d8030a124c697374417373657473526573706f6e736512670a136c6973745f6173736574735f726573756c747318012003280b324a2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c697374417373657473526573706f6e73652e4c697374417373657473526573756c74122d0a09726561645f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012170a0f6e6578745f706167655f746f6b656e18032001280912120a0a746f74616c5f73697a651804200128051afc010a104c697374417373657473526573756c74123b0a05617373657418012001280b322c2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4173736574126c0a0c73746174655f6368616e676518022001280e32562e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c697374417373657473526573706f6e73652e4c697374417373657473526573756c742e53746174654368616e6765223d0a0b53746174654368616e6765120a0a06554e55534544100012090a0541444445441001120b0a0752454d4f5645441002120a0a06414354495645100322b0020a134c69737446696e64696e677352657175657374123c0a06706172656e74180120012809422ce04102fa41260a24736563757269747963656e7465722e676f6f676c65617069732e636f6d2f536f75726365120e0a0666696c74657218022001280912100a086f726465725f6279180320012809122d0a09726561645f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012330a10636f6d706172655f6475726174696f6e18052001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e122e0a0a6669656c645f6d61736b18072001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b12120a0a706167655f746f6b656e18082001280912110a09706167655f73697a6518092001280522ea050a144c69737446696e64696e6773526573706f6e7365126d0a156c6973745f66696e64696e67735f726573756c747318012003280b324e2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c69737446696e64696e6773526573706f6e73652e4c69737446696e64696e6773526573756c74122d0a09726561645f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012170a0f6e6578745f706167655f746f6b656e18032001280912120a0a746f74616c5f73697a651804200128051a86040a124c69737446696e64696e6773526573756c74123f0a0766696e64696e6718012001280b322e2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e46696e64696e6712700a0c73746174655f6368616e676518022001280e325a2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c69737446696e64696e6773526573706f6e73652e4c69737446696e64696e6773526573756c742e53746174654368616e6765126e0a087265736f7572636518032001280b32572e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c69737446696e64696e6773526573706f6e73652e4c69737446696e64696e6773526573756c742e5265736f757263654203e041031a7e0a085265736f75726365120c0a046e616d6518012001280912140a0c70726f6a6563745f6e616d65180220012809121c0a1470726f6a6563745f646973706c61795f6e616d6518032001280912130a0b706172656e745f6e616d65180420012809121b0a13706172656e745f646973706c61795f6e616d65180520012809224d0a0b53746174654368616e6765120a0a06554e555345441000120b0a074348414e4745441001120d0a09554e4348414e474544100212090a0541444445441003120b0a0752454d4f564544100422d4010a1653657446696e64696e67537461746552657175657374123b0a046e616d65180120012809422de04102fa41270a25736563757269747963656e7465722e676f6f676c65617069732e636f6d2f46696e64696e6712480a05737461746518022001280e32342e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e46696e64696e672e53746174654203e0410212330a0a73746172745f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410222640a1852756e4173736574446973636f766572795265717565737412480a06706172656e741801200128094238e04102fa41320a30636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f4f7267616e697a6174696f6e228d010a1455706461746546696e64696e675265717565737412440a0766696e64696e6718012001280b322e2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e46696e64696e674203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22af010a1f5570646174654e6f74696669636174696f6e436f6e66696752657175657374125b0a136e6f74696669636174696f6e5f636f6e66696718012001280b32392e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4e6f74696669636174696f6e436f6e6669674203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22b5010a215570646174654f7267616e697a6174696f6e53657474696e677352657175657374125f0a156f7267616e697a6174696f6e5f73657474696e677318012001280b323b2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4f7267616e697a6174696f6e53657474696e67734203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b228a010a13557064617465536f757263655265717565737412420a06736f7572636518012001280b322d2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e536f757263654203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22d0010a1a55706461746553656375726974794d61726b735265717565737412510a0e73656375726974795f6d61726b7318012001280b32342e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e53656375726974794d61726b734203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b122e0a0a73746172745f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7032862b0a0e536563757269747943656e74657212c6010a0c437265617465536f75726365123a2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e437265617465536f75726365526571756573741a2d2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e536f75726365224b82d3e4930235222b2f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a7d2f736f75726365733a06736f75726365da410d706172656e742c736f7572636512fd010a0d43726561746546696e64696e67123b2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e43726561746546696e64696e67526571756573741a2e2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e46696e64696e67227f82d3e493024122362f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a7d2f66696e64696e67733a0766696e64696e67da4119706172656e742c66696e64696e675f69642c66696e64696e67da4119706172656e742c66696e64696e672c66696e64696e675f696412b8020a184372656174654e6f74696669636174696f6e436f6e66696712462e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4372656174654e6f74696669636174696f6e436f6e666967526571756573741a392e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4e6f74696669636174696f6e436f6e66696722980182d3e493024e22372f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a7d2f6e6f74696669636174696f6e436f6e666967733a136e6f74696669636174696f6e5f636f6e666967da4124706172656e742c636f6e6669675f69642c6e6f74696669636174696f6e5f636f6e666967da411a706172656e742c6e6f74696669636174696f6e5f636f6e66696712c2010a1844656c6574654e6f74696669636174696f6e436f6e66696712462e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e44656c6574654e6f74696669636174696f6e436f6e666967526571756573741a162e676f6f676c652e70726f746f6275662e456d707479224682d3e49302392a372f7631703162657461312f7b6e616d653d6f7267616e697a6174696f6e732f2a2f6e6f74696669636174696f6e436f6e666967732f2a7dda41046e616d65129d010a0c47657449616d506f6c69637912222e676f6f676c652e69616d2e76312e47657449616d506f6c696379526571756573741a152e676f6f676c652e69616d2e76312e506f6c696379225282d3e4930241223c2f7631703162657461312f7b7265736f757263653d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a7d3a67657449616d506f6c6963793a012ada41087265736f7572636512df010a154765744e6f74696669636174696f6e436f6e66696712432e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4765744e6f74696669636174696f6e436f6e666967526571756573741a392e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4e6f74696669636174696f6e436f6e666967224682d3e493023912372f7631703162657461312f7b6e616d653d6f7267616e697a6174696f6e732f2a2f6e6f74696669636174696f6e436f6e666967732f2a7dda41046e616d6512e4010a174765744f7267616e697a6174696f6e53657474696e677312452e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4765744f7267616e697a6174696f6e53657474696e6773526571756573741a3b2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4f7267616e697a6174696f6e53657474696e6773224582d3e493023812362f7631703162657461312f7b6e616d653d6f7267616e697a6174696f6e732f2a2f6f7267616e697a6174696f6e53657474696e67737dda41046e616d6512af010a09476574536f7572636512372e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e476574536f75726365526571756573741a2d2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e536f75726365223a82d3e493022d122b2f7631703162657461312f7b6e616d653d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a7dda41046e616d6512c1010a0b47726f757041737365747312392e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e47726f7570417373657473526571756573741a3a2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e47726f7570417373657473526573706f6e7365223b82d3e493023522302f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a7d2f6173736574733a67726f75703a012a12e5010a0d47726f757046696e64696e6773123b2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e47726f757046696e64696e6773526571756573741a3c2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e47726f757046696e64696e6773526573706f6e7365225982d3e4930241223c2f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a7d2f66696e64696e67733a67726f75703a012ada410f706172656e742c67726f75705f627912be010a0a4c69737441737365747312382e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c697374417373657473526571756573741a392e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c697374417373657473526573706f6e7365223b82d3e493022c122a2f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a7d2f617373657473da4106706172656e7412d0010a0c4c69737446696e64696e6773123a2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c69737446696e64696e6773526571756573741a3b2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c69737446696e64696e6773526573706f6e7365224782d3e493023812362f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a7d2f66696e64696e6773da4106706172656e7412f2010a174c6973744e6f74696669636174696f6e436f6e6669677312452e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c6973744e6f74696669636174696f6e436f6e66696773526571756573741a462e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c6973744e6f74696669636174696f6e436f6e66696773526573706f6e7365224882d3e493023912372f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a7d2f6e6f74696669636174696f6e436f6e66696773da4106706172656e7412c2010a0b4c697374536f757263657312392e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c697374536f7572636573526571756573741a3a2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4c697374536f7572636573526573706f6e7365223c82d3e493022d122b2f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a7d2f736f7572636573da4106706172656e74129c020a1152756e4173736574446973636f76657279123f2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e52756e4173736574446973636f76657279526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22a60182d3e493023c22372f7631703162657461312f7b706172656e743d6f7267616e697a6174696f6e732f2a7d2f6173736574733a72756e446973636f766572793a012ada4106706172656e74ca41580a3f676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e52756e4173736574446973636f76657279526573706f6e73651215676f6f676c652e70726f746f6275662e456d70747912e4010a0f53657446696e64696e675374617465123d2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e53657446696e64696e675374617465526571756573741a2e2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e46696e64696e67226282d3e4930244223f2f7631703162657461312f7b6e616d653d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a2f66696e64696e67732f2a7d3a73657453746174653a012ada41156e616d652c73746174652c73746172745f74696d6512a4010a0c53657449616d506f6c69637912222e676f6f676c652e69616d2e76312e53657449616d506f6c696379526571756573741a152e676f6f676c652e69616d2e76312e506f6c696379225982d3e4930241223c2f7631703162657461312f7b7265736f757263653d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a7d3a73657449616d506f6c6963793a012ada410f7265736f757263652c706f6c69637912cf010a125465737449616d5065726d697373696f6e7312282e676f6f676c652e69616d2e76312e5465737449616d5065726d697373696f6e73526571756573741a292e676f6f676c652e69616d2e76312e5465737449616d5065726d697373696f6e73526573706f6e7365226482d3e493024722422f7631703162657461312f7b7265736f757263653d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a7d3a7465737449616d5065726d697373696f6e733a012ada41147265736f757263652c7065726d697373696f6e7312ed010a0d55706461746546696e64696e67123b2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e55706461746546696e64696e67526571756573741a2e2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e46696e64696e67226f82d3e4930249323e2f7631703162657461312f7b66696e64696e672e6e616d653d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a2f66696e64696e67732f2a7d3a0766696e64696e67da410766696e64696e67da411366696e64696e672c7570646174655f6d61736b12c0020a185570646174654e6f74696669636174696f6e436f6e66696712462e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e5570646174654e6f74696669636174696f6e436f6e666967526571756573741a392e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4e6f74696669636174696f6e436f6e66696722a00182d3e4930262324b2f7631703162657461312f7b6e6f74696669636174696f6e5f636f6e6669672e6e616d653d6f7267616e697a6174696f6e732f2a2f6e6f74696669636174696f6e436f6e666967732f2a7d3a136e6f74696669636174696f6e5f636f6e666967da41136e6f74696669636174696f6e5f636f6e666967da411f6e6f74696669636174696f6e5f636f6e6669672c7570646174655f6d61736b12a9020a1a5570646174654f7267616e697a6174696f6e53657474696e677312482e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e5570646174654f7267616e697a6174696f6e53657474696e6773526571756573741a3b2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e4f7267616e697a6174696f6e53657474696e677322830182d3e4930265324c2f7631703162657461312f7b6f7267616e697a6174696f6e5f73657474696e67732e6e616d653d6f7267616e697a6174696f6e732f2a2f6f7267616e697a6174696f6e53657474696e67737d3a156f7267616e697a6174696f6e5f73657474696e6773da41156f7267616e697a6174696f6e5f73657474696e677312db010a0c557064617465536f75726365123a2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e557064617465536f75726365526571756573741a2d2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e536f75726365226082d3e493023c32322f7631703162657461312f7b736f757263652e6e616d653d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a7d3a06736f75726365da4106736f75726365da4112736f757263652c7570646174655f6d61736b1286030a1355706461746553656375726974794d61726b7312412e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e55706461746553656375726974794d61726b73526571756573741a342e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e53656375726974794d61726b7322f50182d3e49302c00132472f7631703162657461312f7b73656375726974795f6d61726b732e6e616d653d6f7267616e697a6174696f6e732f2a2f6173736574732f2a2f73656375726974794d61726b737d3a0e73656375726974795f6d61726b735a6532532f7631703162657461312f7b73656375726974795f6d61726b732e6e616d653d6f7267616e697a6174696f6e732f2a2f736f75726365732f2a2f66696e64696e67732f2a2f73656375726974794d61726b737d3a0e73656375726974795f6d61726b73da410e73656375726974795f6d61726b73da411a73656375726974795f6d61726b732c7570646174655f6d61736b1a51ca411d736563757269747963656e7465722e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d42fd010a29636f6d2e676f6f676c652e636c6f75642e736563757269747963656e7465722e76317031626574613150015a53676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f736563757269747963656e7465722f7631703162657461313b736563757269747963656e746572aa0225476f6f676c652e436c6f75642e536563757269747943656e7465722e563150314265746131ca0225476f6f676c655c436c6f75645c536563757269747943656e7465725c563170316265746131ea0228476f6f676c653a3a436c6f75643a3a536563757269747943656e7465723a3a5631703162657461315000620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

