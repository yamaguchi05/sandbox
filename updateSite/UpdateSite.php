<?php
/**
 * �T�v�F �T�C�g�̍X�V������Ă���ꍇ�́A�e�L�X�g�t�@�C���ɓf���o��
 * ���̃X�N���v�g������������A�Ώۂ̃T�C�g���X�V���Ă��邩�ۂ����o�͂���
 *
 * Date: 2018/02/11
 * Time: 23:44
 */

const UPDATE_DATE_TXT_PATH = __DIR__ . '/data/updateDate.txt';
//url�擾
$url = 'http://gigazine.net/';

$html = file_get_contents($url);
$domDocument = new DOMDocument();
@$domDocument->loadHTML($html);
$xpath = new DOMXPath($domDocument);
$entries = $xpath->evaluate('//*[@id="section"]/div[2]/section[1]/div');

foreach ($entries as $entry) {
    $news = mb_convert_encoding($entry->textContent, "SJIS");
}

$endLine = getEndLine();
$news = str_replace(array("\r\n","\n","\r"), '', trim($news));

if ($news === $endLine){
    echo $url . '�͍X�V���Ă��܂���';
    exit;
}

//���̏���file�ɓf���o��
putFile($news);
echo $url . '�͍X�V���Ă��܂�';
exit;

/*
 * �X�V�����t�@�C������擾����
 *
 * @return string �t�@�C���̍ŏI�s
 */
function getEndLine()
{
    $text = file_get_contents(UPDATE_DATE_TXT_PATH);
    return end(explode("\n", $text));
}

/*
 * �X�V�����t�@�C���ɓf���o��
 */
function putFile($news)
{
    file_put_contents(UPDATE_DATE_TXT_PATH, "\n{$news}", FILE_APPEND);
}


