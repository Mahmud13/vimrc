" Title: hsftp
" Description: Upload and download files through sftp
" Usage: :Hupload and :Hdownload
"        By default mapped to
"        <leader>hsd (hsftp download) and
"        <leader>hsu (hsftp upload)
"        See README for more
" Github: https://github.com/hesselbom/vim-hsftp
" Author: Viktor Hesselbom (hesselbom.net)
" License: MIT

function! H_GetConf()
  let conf = {}

  let l_configpath = expand('%:p:h')
  let l_configfile = l_configpath . '/.hsftp'
  let l_foundconfig = ''
  if filereadable(l_configfile)
    let l_foundconfig = l_configfile
  else
    while !filereadable(l_configfile)
      let slashindex = strridx(l_configpath, '/')
      if slashindex >= 0
        let l_configpath = l_configpath[0:slashindex]
        let l_configfile = l_configpath . '.hsftp'
        let l_configpath = l_configpath[0:slashindex-1]
        if filereadable(l_configfile)
          let l_foundconfig = l_configfile
          break
        endif
        if slashindex == 0 && !filereadable(l_configfile)
          break
        endif
      else
        break
      endif
    endwhile
  endif

  if strlen(l_foundconfig) > 0
    let options = readfile(l_foundconfig)
    for i in options
      let vname = substitute(i[0:stridx(i, ' ')], '^\s*\(.\{-}\)\s*$', '\1', '')
      let vvalue = escape(substitute(i[stridx(i, ' '):], '^\s*\(.\{-}\)\s*$', '\1', ''), "%#!")
      let conf[vname] = vvalue
    endfor
  endif

  return conf
endfunction

function! H_UploadFile()
  let conf = H_GetConf()

  if has_key(conf, 'site')
    let cmd = printf('sitecopy --update %s', conf['site'])
    execute '!' . cmd 
  else
    echo 'Could not find .hsftp config file'
  endif
endfunction


command! Hupload call H_UploadFile()

nmap <leader>u :Hupload<Esc>
