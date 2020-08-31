using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

// public class PHPinput_2 : MonoBehaviour
// {
   public class push_info : MonoBehaviour {

    public Text input;

    public void data_push()
    {
        StartCoroutine("post_data");
    }

    private IEnumerator post_data()
    {
        // string url = "PHPのURL";
        // string url = "localhost:8888/unity/PHP/function.php";
        string url = "https://.....";
        WWWForm form = new WWWForm();
        // form.AddField("送りたい変数",input.text); //Input Field等から渡された変数
        form.AddField("name",input.text); //Input Field等から渡された変数
        WWW post = new WWW(url, form);
        yield return post;
    }
}

    // // Start is called before the first frame update
    // void Start()
    // {
        
    // }

    // // Update is called once per frame
    // void Update()
    // {
        
    // }

